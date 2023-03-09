<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends LocalizableModel
{
    use HasFactory, Filterable;

    protected $fillable = ['category_id', 'name_kk', 'name_ru', 'description_kk', 'description_ru', 'poster_url', 'image_url'];

    protected $localizable = ['name', 'description'];

    public static function list(string $category_id, $params)
    {
        return self::filter($params)
                    ->where('category_id', $category_id)
                    ->simplePaginateFilter();
    }
}
