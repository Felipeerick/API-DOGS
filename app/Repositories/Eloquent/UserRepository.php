<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\interface\UserRepositoryInterface;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    protected $model = User::class;
}