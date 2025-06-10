<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255', 'min:1'],
            'description' => ['string', 'nullable'],
            'price' => ['required', 'decimal:2'],
            'category_ids' => ['required', 'array'],
        ];
    }
}
