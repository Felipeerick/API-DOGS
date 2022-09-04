<?php

namespace App\Repositories\Eloquent;

use App\Repositories\interface\RepositoryInterface;

class DogRepository extends AbstractRepository implements RepositoryInterface
{
    protected $model = Dog::class;
}