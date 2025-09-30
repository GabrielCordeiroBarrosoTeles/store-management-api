<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EstoqueApiTest extends TestCase
{
    use RefreshDatabase;

    public function testEndpointQueBuscaTodosOsProdutos(): void
    {
        $response = $this->get('/api/estoques');

        $dados = $response->json();

        $response->assertStatus(200);
        $this->assertIsArray($dados);
    }

    public function testEndpointQueBuscaUmProdutoEDeveriaRetornarNotFound(): void
    {
        $response = $this->get('/api/estoques/9999');

        $response->assertStatus(404);
    }

    public function testEndpointQueCriaUmProduto(): void
    {
        $produtoData = [
            'nome' => 'Ração Premium Cães Adultos',
            'funcao' => 'Ração',
            'detalhe' => 'Ração completa para cães adultos',
            'valorcompra' => '45.50',
            'valorvenda' => '65.90',
            'quantidade' => 100,
            'marca' => 'Premier',
            'peso' => '15kg',
            'imagem' => 'racao_premier.jpg',
            'vendido' => 0
        ];

        $response = $this->post('/api/estoques', $produtoData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('estoques', [
            'nome' => 'Ração Premium Cães Adultos',
            'marca' => 'Premier'
        ]);
    }
}