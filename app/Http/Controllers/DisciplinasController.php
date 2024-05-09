<?php

namespace App\Http\Controllers;

use App\Models\Disciplinas;
use App\Http\Requests\StoreDisciplinasRequest;
use App\Http\Requests\UpdateDisciplinasRequest;
use Illuminate\Http\Request;

class DisciplinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disciplinas = \App\Models\Disciplinas::all();
        return view('disciplinas', ['disciplinas' => $disciplinas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form-incluir-disciplina');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $disciplina = new \App\Models\Disciplinas;
        $disciplina->create(['disciplina' => $request->disciplina]);

        return Redirect()->route('disciplinas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Disciplinas $disciplinas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $disciplinas = \App\Models\Disciplinas::find($request->id);
        return view('form-disciplina', ['disciplina'=> $disciplinas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disciplinas $disciplinas)
    {
        $d = Disciplinas::find($request->id);
        $d->disciplina = $request->disciplina;

        $d->save();
        return Redirect()->route('disciplinas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $d = Disciplinas::find($id);
        $d->delete();
        return Redirect()->route('disciplinas');

    }
}
