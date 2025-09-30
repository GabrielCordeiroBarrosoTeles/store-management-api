<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'login' => 'required|string|unique:usuarios,login',
            'senha' => 'required|string',
            'cargo' => 'required|string|max:20'
        ]);

        return Usuario::create($request->all());
    }

    public function show(Usuario $usuario)
    {
        return $usuario;
    }

    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'login' => 'string|unique:usuarios,login,' . $usuario->id,
            'senha' => 'string',
            'cargo' => 'string|max:20'
        ]);

        $usuario->update($request->all());
        return $usuario;
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->json(['message' => 'Usuário deletado com sucesso']);
    }
}