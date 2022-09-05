<?php

namespace App\Repositories\interface;

interface RepositoryInterface{
    
    public function createRequest($request);

    public function all();

    public function destroy();

    public function findID($id);
}