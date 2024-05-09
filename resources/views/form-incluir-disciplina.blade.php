@extends('layouts.app')

@section('content')
    <form class="card" action="{{ route('incluir') }}" method="POST">
        @csrf
        @method('PUT')


        <div class="card-header">
            <div class="card-title">
                Criando nova disciplina
            </div>
        </div>



        <div class="card-body">
            <div class="form-group">
                <label for="id" name="id" id="id" class="label-form">ID</label>
                <input type="number" name="id" id="id" class="form-control" value= "" readonly />
            </div>
            <div class="form-group">
                <label for="disciplina" name="disciplina" id="disciplina" class="label-form">Disciplina</label>
                <input type="text" name="disciplina" id="disciplina" class="form-control" value= "" required />
            </div>

        </div>


        <div class="card-footer">
            <div class="btn-group">
                <a href ="{{ route('disciplinas') }}" type="submit" class="btn btn-info">Inicio</a>
                <button type="submit" class="btn btn-warning">Incluir</button>
                <button type="reset" class="btn btn-primary">Limpar</button>
            </div>

        </div>

    </form>
@endsection
