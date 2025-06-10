<?php

namespace App\Http\Controllers\CRUD\Product;

use App\Http\Controllers\CRUD\AbstractCrudController;
use App\Http\Requests\Product\StoreUpdateProductRequest;
use App\Models\Product;

class ProductController extends AbstractCrudController
{

    protected $model = Product::class;
    protected $route = 'products';
    protected $requestStore = StoreUpdateProductRequest::class;
    protected $requestUpdate = StoreUpdateProductRequest::class;

}
