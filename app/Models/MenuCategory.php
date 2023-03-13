<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuCategory extends LocalizableModel
{
    use HasFactory, Filterable;

    protected $localizable = ['name'];

    protected $fillable = [
        'restaurant_id',
        'name_kk',
        'name_ru',
        'order_number'];

    /**
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($category) {
            $lastOrderNumber = self::where("restaurant_id", $category->restaurant_id)->max("order_number");
            $category->order_number = $lastOrderNumber+1;
        });
    }

    /**
     * Список категории меню по одному ресторану с пагинации
     */
    public static function list(string $restaurant_id)
    {
        return self::where('restaurant_id', $restaurant_id)->simplePaginateFilter();
    }
}
