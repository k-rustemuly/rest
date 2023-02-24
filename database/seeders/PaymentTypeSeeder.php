<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentType::create(['name_kk' => 'Kaspi', 'name_ru' => 'Kaspi']);
        PaymentType::create(['name_kk' => 'Қолма қол ақша', 'name_ru' => 'Наличными']);
        PaymentType::create(['name_kk' => 'Банк картасы', 'name_ru' => 'Банковская карта']);
    }
}
