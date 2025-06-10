<?php

namespace App\Http\Controllers\CRUD\Category;

use App\Http\Controllers\CRUD\AbstractCrudController;
use App\Http\Requests\Category\StoreUpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class CategoryController extends AbstractCrudController
{
    protected $model = Category::class;
    protected $route = 'categories';
    protected $requestStore = StoreUpdateCategoryRequest::class;
    protected $requestUpdate = StoreUpdateCategoryRequest::class;

}
