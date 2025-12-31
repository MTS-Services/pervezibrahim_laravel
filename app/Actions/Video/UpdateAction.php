<?php

namespace App\Actions\Video;


// use App\Events\Admin\AdminUpdated;
use App\Models\Video;
use App\Repositories\Contracts\VideoRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UpdateAction
{
    public function __construct(public VideoRepositoryInterface $interface) {}

    public function execute(int $id,  array $data): Video
    {
        return DB::transaction(function () use ($id, $data) {

            $model = $this->interface->find(column_value: $id);

            if (!$model) {
                Log::error('Video not found', ['video_id' => $id]);
                throw new \Exception('Video not found');
            }

            // Update Model
            $updated = $this->interface->update(id: $id, data: $data);

            if (!$updated) {
                Log::error('Failed to update Video in repository', ['video_id' => $id]);
                throw new \Exception('Failed to update Video');
            }

            // Refresh the model
            $model = $model->fresh();

            // event(new AdminUpdated($model, $data));
            return $model;
        });
    }
}
