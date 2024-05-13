@extends('layouts.app')
@include('navbar')
@section('content')

    <table class="table table-hover table-striped">
        <thead>

            <tr>
                <td>ID</td>
                <td>Nome:</td>
                <td>CPF:</td>
                <td>Usuário:</td>
                <td>Criado:</td>
                <td>Atualizado:</td>
                <td>Ações:</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuarios)
                <tr>
                    <td>{{ $usuarios->id }}</td>
                    <td>{{ $usuarios->nome }}</td>
                    <td>{{ $usuarios->cpf }}</td>
                    <td>{{ $usuarios->usuario }}</td>
                    <td>{{ $usuarios->created_at }}</td>
                    <td>{{ $usuarios->updated_at }}</td>
                    <td class="d-grid gap-2 d-md-flex"><a
                            href="{{ route('editarUser', ['id' => $usuarios->id]) }}" class="btn btn-info btn-sm">Editar</a>

                        <a href="{{ route('excluirUser', ['id' => $usuarios->id]) }}"
                            class="btn btn-danger btn-sm">Excluir</a>


                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="7">

                    Numero de registros: {{ \App\Models\Usuario::count() }}

                    <div>
                        <a href="{{ route('novoUser') }}" class=" btn btn-primary me-md-2 btn-sm">Cadastrar Novo Usuário</a>

                    </div>
                </th>
            </tr>
        </tfoot>
    </table>
@endsection
