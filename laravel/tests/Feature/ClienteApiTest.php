<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClienteApiTest extends TestCase
{
    use RefreshDatabase;

    public function testEndpointQueBuscaTodosOsClientes(): void
    {
        $response = $this->get('/api/clientes');

        $dados = $response->json();

        $response->assertStatus(200);
        $this->assertIsArray($dados);
    }

    public function testEndpointQueBuscaUmClienteEDeveriaRetornarNotFound(): void
    {
        $response = $this->get('/api/clientes/9999');

        $response->assertStatus(404);
    }

    public function testEndpointQueCriaUmCliente(): void
    {
        $clienteData = [
            'nome' => 'Raimundinha Zero Bala',
            'cpf' => '123.456.789-00',
            'email' => 'raimundinha@email.com',
            'telefone' => '(85) 99999-9999'
        ];

        $response = $this->post('/api/clientes', $clienteData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('clientes', [
            'nome' => 'Raimundinha Zero Bala',
            'email' => 'raimundinha@email.com'
        ]);
    }
}