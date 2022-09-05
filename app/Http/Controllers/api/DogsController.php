<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\interface\DogsRepositoryInterface as ContractDog;
use Illuminate\Http\Request;

class DogsController extends Controller
{
    public function __construct(ContractDog $model)
    {
        $this->model = $model;
    }
    public function index()
    {
        return $this->model->all();
    }

    public function store(Request $request)
    {
      return $this->model->createRequest($request->all());
    }

    public function show($id)
    {
        return $this->model->findID($id);
    }

    public function update(Request $request,  $id)
    {
       return $this->model->findID($id)->update($request->all());
    }


    public function destroy($id)
    {
       return $this->model->findID($id)->delete();
    }

    public function search($name)
    {
        return $this->model->whereNameDog($name);
    }
}
