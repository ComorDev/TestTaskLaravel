<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends AbstractModel
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;


    protected static $names = [
        'id' => '#',
        'name' => 'Название'
    ];

    protected static $showOnIndexPage = [
        'name'
    ];

    protected static $allField = [
        'name'
    ];

    protected static $fieldTypes = [
        'name' => 'text',
    ];
}
