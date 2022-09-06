<?php

namespace App\Http\Controllers;

use App\Models\Dogs;
use Illuminate\Http\Request;

class DogsController extends Controller
{
    public function __construct(Dogs $model)
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
        return $this->model->whereRaceDog($name);
    }
}
