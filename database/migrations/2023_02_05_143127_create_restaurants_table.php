<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id')->index()->comment('cities.id');
            $table->string('slug')->unique();
            $table->string('name_kk');
            $table->string('name_ru');
            $table->string('address_kk');
            $table->string('address_ru');
            $table->string('logo')->default('https://restaurant.object.pscloud.io/static/logos/logo.png');
            $table->string('icon')->default('https://restaurant.object.pscloud.io/static/icons/favicon.ico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
};
