<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name = "Castagna";
        $minhaDisciplina = [
            'Desenvolvimento de sistemas',
            'Banco de dados em MYSQL',
            'Lógica de progamação',
            'Modelagem de sistemas',
            'Modelagem de dados',
            'Teste de software',
        ];
        return view('teste',['name'=>$name,
            'disciplinas'=>$minhaDisciplina]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
