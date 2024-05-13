@extends('layouts.app')

@section('content')
    <form class = "card" action="{{ route('atualizarUser') }}" method= "POST">


        @method('PUT')
        @csrf


        <div class="card-header">
            <div class="card-title">
                Editando Usuário
                <div class="card-body">

                    <a href="{{ route('novoUser') }}" class="btn btn-primary">Cadastrar Usuário</a>


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
                    value="{{ $usuarios->usuario }}" />
            </div>

            <div class="form-group">
                <label for="nome" class="label-form">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control"
                    value="{{ $usuarios->nome }}" />
            </div>

            <div class="form-group">
                <label for="cpf" class="label-form">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control"
                    value="{{ $usuarios->cpf }}" />
            </div>

            <div class="form-group">
                <label for="email" class="label-form">Email</label>
                <input type="text" name="email" id="email" class="form-control"
                    value="{{ $usuarios->email }}" />
            </div>

            <div class="form-group">
                <label for="dataNascimento" class="label-form">Data de Nascimento</label>
                <input type="text" name="dataNascimento" id="dataNascimento" class="form-control"
                    value="{{ $usuarios->dataNascimento }}" />
            </div>

            <div class="form-group">
                <label for="telefone" class="label-form">Telefone</label>
                <input type="text" name="telefone" id="telefone" class="form-control"
                    value="{{ $usuarios->telefone }}" />
            </div>

            <div class="form-group">
                <label for="senha" class="label-form">Senha</label>
                <input type="text" name="senha" id="senha" class="form-control"
                    value="{{ $usuarios->senha }}" />
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
