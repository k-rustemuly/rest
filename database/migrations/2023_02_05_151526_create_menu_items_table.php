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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->integer('restaurant_id')->index()->comment('restaurants.id');
            $table->integer('category_id')->index()->comment('menu_categories.id');
            $table->string('name_kk');
            $table->string('name_ru');
            $table->string('description_kk');
            $table->string('description_ru');
            $table->text('poster_url');
            $table->text('image_url');
            $table->decimal('price')->default(0);
            $table->boolean('is_available_for_order')->default(1)->comment('Доступно ли для заказа?');
            $table->integer('order_number')->index()->comment('Сортировка')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
};
