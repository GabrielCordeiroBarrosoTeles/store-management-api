<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Gabriel Cordeiro',
            'cpf' => '111.111.111-21',
            'email' => 'gabrielpikachuoficial@gmail.com',
            'telefone' => '85 9887752571'
        ]);

        Cliente::create([
            'nome' => 'Ivan',
            'cpf' => '111.111.232-32',
            'email' => 'companyname@gmail.com',
            'telefone' => '(22) 22222-2222'
        ]);
    }
}