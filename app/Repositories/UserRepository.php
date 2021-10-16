<?php


namespace App\Repositories;


use App\Models\User;
use App\Repositories\Contract\BaseRepository;

class UserRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model=User::class;
    }
}
