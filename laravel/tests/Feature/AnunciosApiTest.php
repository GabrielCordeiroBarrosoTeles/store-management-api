<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class AnunciosApiTest extends TestCase
{
    use RefreshDatabase;

    public function testEndpointQueBuscaTodosOsAnuncios(): void
    {
        $response = $this->get('/api/anuncios');

        $dados = $response->json();

        $response->assertStatus(200);
        $this->assertIsArray($dados);
    }

    public function testEndpointQueBuscaUmEDeveriaRetornarNotFound(): void
    {
        $response = $this->get('/api/anuncios/9999');

        $response->assertStatus(404);
    }
}
