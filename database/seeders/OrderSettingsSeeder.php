<?php

namespace Database\Seeders;

use App\Models\OrderSettings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderSettings::create([
            'restaurant_id' => 1,
            'settings' => [
                'delivery_types' => [1,2],
                'payment_types' => [1,2,3]
            ]
        ]);
    }
}
