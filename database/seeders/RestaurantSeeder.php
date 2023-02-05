<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::create(['city_id' => 1, 'slug' => 'demo', 'name_kk' => 'Демо', 'name_ru' => 'Демо', 'address_kk' => '28 шағын аудан, 156 үй', 'address_ru' => '28 микрорайон, 156 дом']);
    }
}
