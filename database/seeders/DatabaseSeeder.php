<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CitySeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(MenuCategorySeeder::class);
        $this->call(MenuItemSeeder::class);
        $this->call(DeliveryTypeSeeder::class);
        $this->call(PaymentTypeSeeder::class);
        $this->call(OrderSettingsSeeder::class);
        $this->call(SuperAdminSeeder::class);
    }
}
