<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateOrderRequest extends FormRequest
{
    public function rules()
    {
        return [
            'fio' => ['string', 'required', 'max:255', 'min:1'],
            'status' => ['string', 'required'],
            'comment' => ['string', 'nullable'],
            'product_ids' => ['required', 'array'],
        ];
    }
}
