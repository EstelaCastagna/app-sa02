@extends('layouts.app')

@section('content')
    <form class = "card" action="{{ route('atualizarUser') }}" method= "POST">


        @method('PUT')
        @csrf


        <div class="card-header">
            <div class="card-title">
                Editando Usuário
                <div class="card-body">

                    <a href="{{ route('atualizarUser') }}" class="btn btn-primary">Atualizar Usuário</a>


                </div>
            </div>

        </div>


        <div class="card-body">
            <div class="form-group">
                <label for="id" class="label-form">ID</label>
                <input type="number" name="id" class="form-control" value="{{ $usuarios->id }}" readonly />
            </div>

            <div class="form-group">
                <label for="usuario" class="label-form">Usuário</label>
                <input type="text" name="usuario" id="usuario" class="form-control"
                    value="{{ $usuarios->usuarios }}" />
            </div>


        </div>

        <div class="card-footer">
            <div class="btn-group">
                <a href ="{{ route('usuarios') }}" type="submit" class="btn btn-info">Inicio</a>
                <button type="submit" class="btn btn-warning">Atualizar</button>
                <button type="reset" class="btn btn-primary">Limpar</button>
            </div>
        </div>

    </form>
@endsection
