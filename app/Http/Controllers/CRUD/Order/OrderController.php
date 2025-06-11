<?php

namespace App\Http\Controllers\CRUD\Order;

use App\Http\Controllers\CRUD\AbstractCrudController;
use App\Http\Requests\Order\StoreUpdateOrderRequest;
use App\Models\Order;

class OrderController extends AbstractCrudController
{

    protected $model = Order::class;
    protected $route = 'orders';
    protected $requestStore = StoreUpdateOrderRequest::class;
    protected $requestUpdate = StoreUpdateOrderRequest::class;

}
