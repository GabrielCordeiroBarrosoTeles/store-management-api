<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Quantity;
use Symfony\Component\HttpFoundation\Request;

use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index(): mixed
    {
        return User::all(); 
    }

    public function show(string $id): mixed
    {
        return User::find($id);
    }

    public function store(Request $request): mixed
    {
        $dados = $request->toArray();

        try {
            $request->validate([
                'password' => 'required|min:8',
                'email' => 'required|unique:users',
                'name' => ['required', 'min:6'],
            ]);
        } catch (\Exception $exception) {
            $errors = $exception->validator->errors();

            return response()->json([
                'error' => 'request body invalid',
                'fields' => $errors,
            ], 422);
        }


        DB::beginTransaction();

        try {
            $user = User::create($dados);
    
            $quantity = Quantity::where(['table' => 'users'])->first();
            $quantity->quantity += 1;
            $quantity->save();

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollback();

            return response()->json([
                'error' => 'Try again',
            ]);
        }

        return $user;
    }

    // a moda PHP das ruas (puro)
    // public function store(Request $request): mixed
    // {
    //     $dados = $request->toArray();

    //     $errors = [];

    //     if (false === isset($dados['password'])) {
    //         $errors['password'][] = 'password é obrigatorio';
    //     }

    //     if (8 > strlen($dados['password'] ?? '')) {
    //         $errors['password'][] = 'precisa ter no minimo 8 caracteres';
    //     }

    //     if (false === isset($dados['email'])) {
    //         $errors['email'][] = 'email é obrigatorio';
    //     }
        
    //     if (false === empty($errors)) {
    //         return response()->json([
    //             'error' => 'request body invalid',
    //             'fields' => $errors,
    //         ]);
    //     }

    //     // teria que fazer uma validacao dos dados
    //     return User::create($dados);
    // }

    public function destroy(string $id): mixed
    {
        $user = User::findOrFail($id);

        if (!$user) {
            return response()->json(status: 404);
        }

        $user->delete();

        return response()->json(status: 204);
    }
}
