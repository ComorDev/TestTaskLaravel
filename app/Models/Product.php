<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends AbstractModel
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    protected $casts = [
        'categories' => 'array',
    ];

    public $timestamps = false;

    protected static $names = [
        'id' => '#',
        'name' => 'Название',
        'description' => 'Описание',
        'price' => 'Цена',
        'categories' => 'Категории'
    ];

    protected static $showOnIndexPage = [
        'name',
        'price'
    ];

    protected static $allField = [
        'name',
        'description',
        'price',
        'categories',
    ];

    protected static $fieldTypes = [
        'name' => 'text',
        'description' => 'textarea',
        'price' => [
            'type' => 'number',
            'attributes' => [
                'step' => '0.01',
                'min' => '0'
            ]
        ],
        'categories' => [
            'type' => 'select-multiple',
            'model' => Category::class,
            'value' => 'id',
            'text' => 'name',
            'placeholder' => 'Выберите категории'
        ]
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'product_id');
    }
}
