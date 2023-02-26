<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends LocalizableModel
{
    use HasFactory, Filterable;

    protected $localizable = ['name', 'address'];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public static function list($params)
    {
        return self::filter($params)
                    ->with(['city'])
                    ->simplePaginateFilter();
    }

}
