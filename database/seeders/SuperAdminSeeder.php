<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make("change");
        $user = User::firstOrCreate(
            ["email" => "kuanish@mail.kz"],
            ["name" => "Kuanysh", "password" => $password]
        );
        $user->assignRole('Super Admin');
    }
}
