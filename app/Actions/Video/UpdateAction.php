<?php

namespace App\Actions\Video;

use App\Models\Video;
use App\Repositories\Contracts\VideoRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;
use Illuminate\Http\UploadedFile;

class UpdateAction
{
    public function __construct(
        public VideoRepositoryInterface $interface
    ) {}

    public function execute(int $id, array $data): Video
    {
        $newThumbnailPath = null;
        $newFilePath = null;

        try {
            return DB::transaction(function () use ($id, $data, &$newThumbnailPath, &$newFilePath) {

                $video = $this->interface->find(column_value: $id);

                if (!$video) {
                    Log::error('Video not found', ['video_id' => $id]);
                    throw new \Exception('Video not found');
                }

                $oldData = $video->getAttributes();
                $newData = $data;

                /**
                 * -------------------------
                 * Thumbnail handling
                 * -------------------------
                 */
                $oldThumbnail = Arr::get($oldData, 'thumbnail');
                $thumbnail = Arr::get($data, 'thumbnail');

                if ($thumbnail instanceof UploadedFile) {
                    if ($oldThumbnail && Storage::disk('public')->exists($oldThumbnail)) {
                        Storage::disk('public')->delete($oldThumbnail);
                    }

                    $newThumbnailPath = Storage::disk('public')
                        ->putFile('thumbnails', $thumbnail);

                    $newData['thumbnail'] = $newThumbnailPath;
                } else {
                    $newData['thumbnail'] = $oldThumbnail;
                }

                /**
                 * -------------------------
                 * Video file handling
                 * -------------------------
                 */
                $oldFile = Arr::get($oldData, 'file');
                $file = Arr::get($data, 'file');

                if ($file instanceof UploadedFile) {
                    if ($oldFile && Storage::disk('public')->exists($oldFile)) {
                        Storage::disk('public')->delete($oldFile);
                    }

                    $newFilePath = Storage::disk('public')
                        ->putFile('videos', $file);

                    $newData['file'] = $newFilePath;
                } else {
                    // THIS IS THE MOST IMPORTANT LINE
                    $newData['file'] = $oldFile;
                }

                /**
                 * -------------------------
                 * Update model
                 * -------------------------
                 */
                $updated = $this->interface->update(
                    id: $id,
                    data: $newData
                );

                if (!$updated) {
                    throw new \Exception('Failed to update Video');
                }

                return $video->fresh();
            });
        } catch (\Exception $e) {

            /**
             * -------------------------
             * File rollback
             * -------------------------
             */
            if ($newThumbnailPath && Storage::disk('public')->exists($newThumbnailPath)) {
                Storage::disk('public')->delete($newThumbnailPath);
            }

            if ($newFilePath && Storage::disk('public')->exists($newFilePath)) {
                Storage::disk('public')->delete($newFilePath);
            }

            throw $e;
        }
    }
}
