<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuItem extends LocalizableModel
{
    use HasFactory;

    protected $localizable = ['name', 'description'];
}
