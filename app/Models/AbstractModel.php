<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model
{
    protected static $names;
    protected static $showOnIndexPage;
    protected static $allField;

    protected static $fieldTypes;

    /**
     * @return string[]
     */
    public static function getNames(): array
    {
        return static::$names;
    }

    /**
     * @return string[]
     */
    public static function getShowOnIndexPage(): array
    {
        return static::$showOnIndexPage;
    }

    /**
     * @return string[]
     */
    public static function getAllField(): array
    {
        return static::$allField;
    }

    /**
     * @return string[]
     */
    public static function getFieldTypes(): array
    {
        return static::$fieldTypes;
    }
}
