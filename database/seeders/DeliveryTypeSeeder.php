<?php

namespace Database\Seeders;

use App\Models\DeliveryType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeliveryType::create(['name_kk' => 'Жеткізу', 'name_ru' => 'Доставка']);
        DeliveryType::create(['name_kk' => 'Өзіңіз алып кету', 'name_ru' => 'Самовывоз']);
    }
}
