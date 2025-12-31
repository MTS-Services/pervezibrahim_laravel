<?php

namespace App\Actions\Video;


// use App\Events\Admin\AdminCreated;
use App\Models\Video;
use App\Repositories\Contracts\VideoRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CreateAction
{
    public function __construct(public VideoRepositoryInterface $interface) {}

    public function execute(array $data): Video
    {
        return DB::transaction(function () use ($data) {

            if ($data['thumbnail']) {
                $data['thumbnail'] = Storage::disk('public')->putFile('thumbnails', $data['thumbnail']);
            }
            if ($data['file']) {
                $data['file'] = Storage::disk('public')->putFile('files', $data['file']);
            }

            // Create video
            $model = $this->interface->create(data: $data);

            // Dispatch event
            // event(new AdminCreated($model));

            return $model->fresh();
        });
    }
}
