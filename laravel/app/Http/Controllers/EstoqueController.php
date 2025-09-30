<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index()
    {
        return Estoque::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:85',
            'funcao' => 'required|string|max:97',
            'detalhe' => 'required|string|max:200',
            'valorcompra' => 'required|string|max:95',
            'valorvenda' => 'required|string|max:95',
            'marca' => 'required|string|max:95',
            'peso' => 'required|string|max:95',
            'imagem' => 'required|string|max:270',
            'quantidade' => 'nullable|integer',
            'vendido' => 'integer|min:0'
        ]);

        $data = $request->all();
        $data['vendido'] = $data['vendido'] ?? 0;
        
        return Estoque::create($data);
    }

    public function show(Estoque $estoque)
    {
        return $estoque;
    }

    public function update(Request $request, Estoque $estoque)
    {
        $request->validate([
            'nome' => 'string|max:85',
            'funcao' => 'string|max:97',
            'detalhe' => 'string|max:200',
            'valorcompra' => 'string|max:95',
            'valorvenda' => 'string|max:95',
            'marca' => 'string|max:95',
            'peso' => 'string|max:95',
            'imagem' => 'string|max:270',
            'quantidade' => 'nullable|integer',
            'vendido' => 'integer|min:0'
        ]);

        $data = $request->all();
        // Remove campos vazios para não sobrescrever
        $data = array_filter($data, function($value) {
            return $value !== null && $value !== '';
        });
        
        $estoque->update($data);
        return $estoque;
    }

    public function destroy(Estoque $estoque)
    {
        $estoque->delete();
        return response()->json(['message' => 'Produto deletado com sucesso']);
    }
}