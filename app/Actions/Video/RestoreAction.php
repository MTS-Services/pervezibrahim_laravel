<?php


namespace App\Actions\Video;

use App\Repositories\Contracts\VideoRepositoryInterface;
use Illuminate\Support\Facades\DB;

class RestoreAction
{
  public function __construct(public VideoRepositoryInterface $interface) {}

  public function execute(int $id, array $actioner)
  {
    return DB::transaction(function () use ($id, $actioner) {
      return $this->interface->restore(id: $id, actioner: $actioner);
    });
  }
}
