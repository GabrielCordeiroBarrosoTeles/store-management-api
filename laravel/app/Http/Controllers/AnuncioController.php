<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Anuncio;
use App\Repository\AnuncioRepository;
use Symfony\Component\HttpFoundation\Request;


class AnuncioController extends Controller
{
    public function __construct(
        private AnuncioRepository $repository
    ) {
    }

    public function index(): mixed
    {
        return $this->repository->findAll(); 
    }

    public function show(string $id): mixed
    {
        $anuncio = Anuncio::find($id);
        
        if (!$anuncio) {
            return response()->json(['message' => 'Anuncio not found'], 404);
        }
        
        return $anuncio;
    }

    public function store(Request $request): mixed
    {
        // teria que fazer uma valida dos dados
        return Anuncio::create($request->toArray());
    }

    public function destroy(string $id): mixed
    {
        $anuncio = Anuncio::findOrFail($id);

        if (!$anuncio) {
            return response()->json(status: 404);
        }

        $anuncio->delete();

        return response()->json(status: 204);
    }
}

// php artisan migrate
