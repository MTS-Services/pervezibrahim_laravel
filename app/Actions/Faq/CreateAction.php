<?php

namespace App\Actions\Faq;


// use App\Events\Admin\AdminCreated;
use App\Models\Faq;
use App\Repositories\Contracts\FaqRepositoryInterface;
use Illuminate\Support\Facades\DB;

class CreateAction
{
    public function __construct(public FaqRepositoryInterface $interface) {}

    public function execute(array $data): Faq
    {
        return DB::transaction(function () use ($data) {

            // Create faq
            $model = $this->interface->create(data: $data);

            // Dispatch event
            // event(new AdminCreated($model));

            return $model->fresh();
        });
    }
}
