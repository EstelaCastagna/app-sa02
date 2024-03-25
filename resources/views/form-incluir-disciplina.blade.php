@extends('layouts.app')

@section('content')
    

    <form class="card" action="{{ route('store') }}" method="POST">

        @method=('PUT')
        @csrf

        <div class="card-header">
            <div class="card-title">
                Editando disciplina
            </div>

        </div>

        <div class="card-body">
        <a href="{{route('incluir')}}" class="btn btn-primary">Novo</a>
            <div class="form-group">
                <label for="id" class="label-form">ID</label>
                <input type="number" name="id" class="form-control" value="{{ $disciplina->id }}" readonly />
            </div>

            <div class="form-group">
                <label for="disciplina" class="label-form">Disciplina</label>
                <input type="text" name="disciplina" id="disciplina" class="form-control"
                    value="{{ $disciplina->disciplina }}" />
            </div>


        </div>

        <div class="card-footer">
            <div class="btn-group">
                <button type="submit" class="btn btn-warning">Atualizar</button>
                <button type="reset" class="btn btn-primary">Limpar</button>
            </div>
        </div>

    </form>
@endsection
