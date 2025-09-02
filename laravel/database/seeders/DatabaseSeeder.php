<?php

namespace Database\Seeders;

use App\Models\Anuncio;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            QuantitySeeder::class,
            UserSeeder::class,
            AnuncioSeeder::class,
        ]);
    }
}
