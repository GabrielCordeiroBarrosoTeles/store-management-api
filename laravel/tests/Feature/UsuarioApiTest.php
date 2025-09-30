<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsuarioApiTest extends TestCase
{
    use RefreshDatabase;

    public function testEndpointQueBuscaTodosOsUsuarios(): void
    {
        $response = $this->get('/api/usuarios');

        $dados = $response->json();

        $response->assertStatus(200);
        $this->assertIsArray($dados);
    }

    public function testEndpointQueBuscaUmUsuarioEDeveriaRetornarNotFound(): void
    {
        $response = $this->get('/api/usuarios/9999');

        $response->assertStatus(404);
    }

    public function testEndpointQueCriaUmUsuario(): void
    {
        $usuarioData = [
            'login' => 'operador1',
            'senha' => 'senha123',
            'cargo' => 'operador'
        ];

        $response = $this->post('/api/usuarios', $usuarioData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('usuarios', [
            'login' => 'operador1',
            'cargo' => 'operador'
        ]);
    }
}