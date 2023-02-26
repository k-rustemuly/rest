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
        // Schema::create('orders', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('restaurant_id')->index()->comment('restaurants.id');
        //     $table->tinyInteger('letter')->index()->comment('Dec Номер буквы в ASCII. Смена');
        //     $table->integer('num')->index()->comment('2-ая часть номера заказа');
        //     $table->string('verification', 255)->comment('Проверочная часть');
        //     $table->string('phone_number', 11)->comment('Номер телефона');
        //     $table->integer('delivery_type_id')->comment('Тип вывоза');
        //     $table->integer('payment_type_id')->comment('Тип оплаты');
        //     $table->tinyInteger('persons')->comment('Количество персон')->default(0);
        //     $table->string('shipping_address')->nullable()->comment('Адрес доставки');
        //     $table->json('dishList')->comment('Список блюд');
        //     $table->integer('total')->default(0)->comment('Итого');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('orders');
    }
};
