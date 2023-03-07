<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends LocalizableModel
{
    use HasFactory, Filterable;

    protected $fillable = ['name_kk', 'name_ru'];

    protected $localizable = ['name'];

    public static function list($params)
    {
        return self::filter($params)
                    ->simplePaginateFilter();
    }
}
