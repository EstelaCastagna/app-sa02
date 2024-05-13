<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = \App\Models\Usuario::all();
        return view('usuarios', ['usuarios' => $usuario]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form-cadastrar-usuario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'usuario' => 'required', // Certifique-se de que 'usuario' é obrigatório
        ]);
    
        // Crie um novo registro na tabela 'usuarios'
        $usuario = new \App\Models\Usuario;
    
        // Preencha o campo 'usuario' com o valor fornecido pelo usuário
        $usuario->usuario = $request->usuario;
        $usuario->email = $request->email;
        $usuario->cpf = $request->cpf;
        $usuario->nome = $request->nome;
        $usuario->senha = $request->senha;
        $usuario->dataNascimento = $request->dataNascimento;
        $usuario->telefone = $request->telefone;

        // Salve o registro criado no banco de dados
        $usuario->save();
    
        // Redirecione para a rota 'usuarios' após a criação bem-sucedida do registro
        return redirect()->route('usuarios');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $usuario = \App\Models\Usuario::find($request->id);
        return view('form-usuario', ['usuarios'=> $usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $u = Usuario::find($request->id);
        $u->usuario = $request->usuario;

        $u->save();
        return Redirect()->route('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $u = Usuario::find($id);
        $u->delete();
        return Redirect()->route('usuarios');
    }
}
