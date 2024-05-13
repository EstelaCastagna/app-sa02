@extends('layouts.app')

@section('content')
    <form class="card" action="{{ route('incluirUser') }}" method="POST">
        @csrf
        @method('PUT')


        <div class="card-header">
            <div class="card-title">
                Cadastro de Usuário
            </div>
        </div>


        <div class="card-body">
            <div class="form-group">
                <label for="id" name="id" id="id" class="label-form">ID</label>
                <input type="number" name="id" id="id" class="form-control" value= "" readonly />
            </div>
            <div class="form-group">
                <label for="nome" name="nome" id="nome" class="label-form">Nome Completo</label>
                <input type="text" name="nome" id="nome" class="form-control" value= "" required />
            </div>
            <div class="form-group">
                <label for="cpf" name="cpf" id="cpf" class="label-form">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" value= "" required />
            </div>
            <div class="form-group">
            <div class="form-group">
                <label for="dataNascimento" name="dataNascimento" id="dataNascimento" class="label-form">Data de Nascimento</label>
                <input type="text" name="dataNascimento" id="dataNascimento" class="form-control" value= "" required />
            </div>
                <label for="email" name="email" id="email" class="label-form">Email</label>
                <input type="text" name="email" id="email" class="form-control" value= "" required />
            </div>
            <div class="form-group">
                <label for="usuario" name="usuario" id="usuario" class="label-form">Usuário</label>
                <input type="text" name="usuario" id="usuario" class="form-control" value= "" required />
            </div>
            <div class="form-group">
                <label for="telefone" name="telefone" id="telefone" class="label-form">Telefone</label>
                <input type="text" name="telefone" id="telefone" class="form-control" value= "" required />
            </div>
            <div class="form-group">
                <label for="senha" name="senha" id="senha" class="label-form">Senha</label>
                <input type="text" name="senha" id="senha" class="form-control" value= "" required />
            </div>
            
            

        </div>


        <div class="card-footer">
            <div class="btn-group">
                <a href ="{{ route('usuarios') }}" type="submit" class="btn btn-info">Inicio</a>
                <button type="submit" class="btn btn-warning">Incluir</button>
                <button type="reset" class="btn btn-primary">Limpar</button>
            </div>

        </div>

    </form>
@endsection
