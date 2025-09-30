<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return Cliente::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:95',
            'email' => 'required|email|max:97',
            'telefone' => 'required|string|max:25',
            'cpf' => 'nullable|string|max:14'
        ]);

        return Cliente::create($request->all());
    }

    public function show(Cliente $cliente)
    {
        return $cliente;
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nome' => 'string|max:95',
            'email' => 'email|max:97',
            'telefone' => 'string|max:25',
            'cpf' => 'nullable|string|max:14'
        ]);

        $cliente->update($request->all());
        return $cliente;
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return response()->json(['message' => 'Cliente deletado com sucesso']);
    }
}