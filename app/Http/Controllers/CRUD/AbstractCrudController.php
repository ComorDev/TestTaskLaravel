<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Traits\ValidatesCrudRequests;
use Illuminate\Http\Request;

abstract class AbstractCrudController
{
    use ValidatesCrudRequests;

    protected $model;
    protected $route;
    protected $requestStore;
    protected $requestUpdate;

    public function index()
    {
        $route = $this->route;
        $classModel = $this->model;
        $models = $this->model::all();

        return view("crud.index", compact(
            'models',
            'classModel',
            'route'
        ));
    }

    public function show($modelId)
    {
        $route = $this->route;

        $model = $this->model::query()
            ->find($modelId);

        return view("crud.show", compact(
            'model',
            'route'
        ));
    }


    public function create()
    {
        $route = $this->route;
        $classModel = $this->model;

        return view("crud.create", compact(
            'route',
            'classModel'
        ));
    }

    public function store(Request $request)
    {
        $validatedData = $this->validateRequest($request, $this->requestStore);

        $this->model::query()->create($validatedData);

        return redirect()->route($this->route . ".index");
    }

    public function edit($modelId)
    {
        $route = $this->route;

        $model = $this->model::query()
            ->find($modelId);

        return view("crud.edit", compact(
            'model',
            'route'
        ));
    }

    public function update($modelId, Request $request)
    {
        $validatedData = $this->validateRequest($request, $this->requestUpdate);

        $this->model::query()->find($modelId)->update($validatedData);

        return redirect()->route($this->route . ".index");
    }

    public function destroy($modelId)
    {
        $this->model::query()->find($modelId)->delete();

        return redirect()->route($this->route . ".index");
    }

}
