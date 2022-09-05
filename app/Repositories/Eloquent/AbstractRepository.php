<?php

namespace App\Repositories\Eloquent;

class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    protected function resolveModel()
    {
        return app($this->model);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function createRequest($request)
    {
        return $this->model->create($request);
    }

    public function destroy()
    {
        return $this->model->delete();
    }

    public function findID($id)
    {
        return $this->model->findOrFail($id);
    }

    public function whereNameDog($name)
    {
        return $this->model->where("name", "like", "%{$name}%")->get();
    }

    public function whereEmail($email)
    {
        return $this->model->where("email", $email)->first();
    }

}