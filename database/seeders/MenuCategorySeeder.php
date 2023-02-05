<?php

namespace Database\Seeders;

use App\Models\MenuCategory;
use Illuminate\Database\Seeder;

class MenuCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuCategory::create(['restaurant_id' => 1, 'name_kk' => 'Бургер', 'name_ru' => 'Бургер', 'order_number' => 1]);
        MenuCategory::create(['restaurant_id' => 1, 'name_kk' => 'Суши', 'name_ru' => 'Суши', 'order_number' => 2]);
        MenuCategory::create(['restaurant_id' => 1, 'name_kk' => 'Донер', 'name_ru' => 'Донер', 'order_number' => 3]);
    }
}
