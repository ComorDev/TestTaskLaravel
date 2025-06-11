<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends AbstractModel
{
    use HasFactory;

    protected $table = 'orders';

    public const STATUS_NEW = 'new';
    public const STATUS_COMPLETE = 'completed';

    protected $fillable = [
        'fio',
        'status',
        'comment',
        'product_id',
        'created_at'
    ];


    protected static $names = [
        'id' => '#',
        'fio' => 'ФИО',
        'status' => 'Статус',
        'comment' => 'Комментарий',
        'product_id' => 'Товары',
        'created_at' => 'Создано'
    ];

    protected static $showOnIndexPage = [
        'fio',
        'status'
    ];

    protected static $allField = [
        'fio',
        'status',
        'comment',
        'product_id',
        'created_at'
    ];

    protected static $fieldTypes = [
        'fio' => 'text',
        'status' => [
            'type' => 'select',
            'options' => [
                self::STATUS_NEW => 'Новый',
                self::STATUS_COMPLETE => 'Завершен'
            ]
        ],
        'comment' => 'text',
        'product_id' => [
            'type' => 'select',
            'model' => Product::class,
            'value' => 'id',
            'text' => 'name',
            'placeholder' => 'Выберите товары'
        ],
        'created_at' => [
            'type' => 'text',
            'attributes' => [
                'readonly' => true
            ]
        ]
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }


}

