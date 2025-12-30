<?php

namespace App\Actions\Faq;


// use App\Events\Admin\AdminUpdated;
use App\Models\Faq;
use App\Repositories\Contracts\FaqRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UpdateAction
{
    public function __construct(public FaqRepositoryInterface $interface) {}

    public function execute(int $id,  array $data): Faq
    {
        return DB::transaction(function () use ($id, $data) {

            $model = $this->interface->find(column_value: $id);

            if (!$model) {
                Log::error('Faq not found', ['faq_id' => $id]);
                throw new \Exception('Faq not found');
            }

            // Update Model
            $updated = $this->interface->update(id: $id, data: $data);

            if (!$updated) {
                Log::error('Failed to update Faq in repository', ['faq_id' => $id]);
                throw new \Exception('Failed to update Faq');
            }

            // Refresh the model
            $model = $model->fresh();

            // event(new AdminUpdated($model, $data));

            return $model;
        });
    }
}
