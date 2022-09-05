<?php

namespace App\Repositories\interface;

interface DogsRepositoryInterface{
    
    public function createRequest($request);

    public function all();

    public function destroy();

    public function findID($id);
}