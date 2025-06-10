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
        'category_ids'
    ];

    protected $casts = [
        'category_ids' => 'array',
    ];

    public $timestamps = false;

    protected static $names = [
        'id' => '#',
        'name' => 'Название',
        'description' => 'Описание',
        'price' => 'Цена',
        'category_ids' => 'Категории'
    ];

    protected static $showOnIndexPage = [
        'name',
        'price'
    ];

    protected static $allField = [
        'name',
        'description',
        'price',
        'category_ids',
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
        'category_ids' => [
            'type' => 'select-multiple',
            'model' => Category::class,
            'value' => 'id',
            'text' => 'name',
            'placeholder' => 'Выберите категории'
        ]
    ];


    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
