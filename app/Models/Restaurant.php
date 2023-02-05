<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends LocalizableModel
{
    use HasFactory;

    protected $localizable = ['name', 'address'];
}
