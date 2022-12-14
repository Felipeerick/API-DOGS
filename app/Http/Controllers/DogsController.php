<?php

namespace App\Http\Controllers;

use App\Models\Dogs;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

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
      return $this->model->create($request->all());
    }

    public function show($id)
    {
        $dogs = $this->model->find($id);

        if(!$dogs){
            return response([
                "message" => "Nao existe esse dog",
            ]);
        }else{    
            return $dogs;
        }
    }

    public function update(Request $request,  $id)
    {
       $dogs = $this->model->find($id);

        if(!$dogs){
            return response([
                "message" => "Nao existe esse dog",
            ]);
        }else{    
            return $dogs->update($request->all());
        }
    }


    public function destroy($id)
    {
        $dogs = $this->model->find($id);

        if(!$dogs){
            return response([
                "message" => "Nao existe esse dog",
            ]);
        }else{    
            return $dogs->delete();
        }
    }

    public function search($name)
    {
       $dogs = $this->model->where('name', 'like', "%{$name}%")->first();

        if(!$dogs){
            return response([
                "message" => "Nao existe esse dog",
            ]);
        }else{    
            return $dogs;
        }
     
    }
}
