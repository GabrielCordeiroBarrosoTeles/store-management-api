<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        Usuario::create([
            'login' => 'adm',
            'senha' => '$2y$10$fJwyhXHiLcc2qc.0Zh6C1uhxaQFldfUgWHwonpupumWuf34ZVhP.W',
            'cargo' => 'adm'
        ]);

        Usuario::create([
            'login' => 'Gabriel',
            'senha' => '$2y$10$zxkVtE.4m1p.XK/oHx/yaO6RE37a4A3JSwuH2..25JXGeyiq59biW',
            'cargo' => 'operador'
        ]);

        Usuario::create([
            'login' => 'cliente',
            'senha' => '$2y$10$.ZUULBXhR4j4vFYYP2KlMuhSkZ9fFsj3gXmtzKO2DI3TP3NkWmJ/q',
            'cargo' => 'cliente'
        ]);

        Usuario::create([
            'login' => 'operador',
            'senha' => '$2y$10$qX2h/Zp8r9RTq0dBfrdNm.V7Bg0RjESeE64prX1WBFAYoegnXXHf6',
            'cargo' => 'operador'
        ]);
    }
}