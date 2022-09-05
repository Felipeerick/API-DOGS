<?php

namespace App\Http\Controllers;

use App\Repositories\interface\RepositoryInterface as Contract;
use Illuminate\Http\Request;

class DogsController extends Controller
{
    public function __construct(Contract $model)
    {
        $this->model = $model;
    }
    public function index()
    {
        return $this->model->all();
    }

    public function store(Request $request)
    {
        $this->model->createRequest($request->all());
    }

    public function show($id)
    {
        return $this->model->findID($id);
    }

    public function update(Request $request,  $id)
    {
        $this->model->findID($id)->update($request->all());
    }


    public function destroy($id)
    {
        $this->model->findID($id)->delete();
    }
}
