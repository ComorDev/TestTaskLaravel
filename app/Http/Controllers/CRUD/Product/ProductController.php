<?php

namespace App\Http\Controllers\CRUD\Product;

use App\Http\Controllers\CRUD\AbstractCrudController;
use App\Http\Requests\Product\StoreUpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends AbstractCrudController
{

    protected $model = Product::class;
    protected $route = 'products';
    protected $requestStore = StoreUpdateProductRequest::class;
    protected $requestUpdate = StoreUpdateProductRequest::class;

    public function store(Request $request)
    {
        $validatedData = $this->validateRequest($request, $this->requestStore);

        $model = Product::query()->create($validatedData);
        $model->categories()->sync($validatedData['categories']);

        return redirect()->route($this->route . ".index");
    }

}
