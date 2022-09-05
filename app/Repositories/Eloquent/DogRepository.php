<?php

namespace App\Repositories\Eloquent;

use App\Models\Dogs;
use App\Repositories\interface\RepositoryInterface;

class DogRepository extends AbstractRepository implements RepositoryInterface
{
    protected $model = Dogs::class;
}