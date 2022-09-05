<?php

namespace App\Repositories\Eloquent;

use App\Models\Dogs;
use App\Repositories\interface\DogsRepositoryInterface;

class DogRepository extends AbstractRepository implements DogsRepositoryInterface
{
    protected $model = Dogs::class;
}