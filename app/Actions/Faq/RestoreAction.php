<?php


namespace App\Actions\Faq;

use App\Repositories\Contracts\FaqRepositoryInterface;
use Illuminate\Support\Facades\DB;

class RestoreAction
{
  public function __construct(public FaqRepositoryInterface $interface) {}

  public function execute(int $id, array $actioner)
  {
    return DB::transaction(function () use ($id, $actioner) {
      return $this->interface->restore(id: $id, actioner: $actioner);
    });
  }
}
