<?php

namespace App\Repositories;

use XuanQuynh\Laravel\Repositories\Repository as BaseRepository;
use App\Contracts\Repositories\UserRepository as UserRepositoryInterface;
use App\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getModelName()
    {
        return User::class;
    }

    // Define all abstract methods...
}