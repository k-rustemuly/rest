<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends LocalizableModel
{
    use HasFactory;

    protected $table = 'cities';

    protected $localizable = ['name'];

}
