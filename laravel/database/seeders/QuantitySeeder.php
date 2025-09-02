<?php

namespace Database\Seeders;

use App\Models\Quantity;
use Illuminate\Database\Seeder;

class QuantitySeeder extends Seeder
{
    public function run(): void
    {
        $quantities = [
            [
                'table' => 'users',
            ],
            [
                'table' => 'anuncios',
            ],
        ];

        foreach ($quantities as $quantity) {
            $quantity['quantity'] = 0;
            Quantity::create($quantity);
        }
    }
}
