<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Quantity;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Chiquim das Tapiocas',
                'email' => 'chiquim@email.com',
            ],
            [
                'name' => 'Raimundinha Zero Bala',
                'email' => 'raimundinha@email.com',
            ],
            [
                'name' => 'Ingrid Tavares',
                'email' => 'tavares@email.com',
            ],
        ];

        foreach ($users as $user) {
            $user['password'] = password_hash('123456', PASSWORD_DEFAULT);
            User::create($user);

            $quantity = Quantity::where(['table' => 'users'])->first();
            $quantity->quantity += 1;

            $quantity->save();
        }
    }
}
