@extends('layouts.app')

@section('content')
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Usuário:</td>
                <td>CPF:</td>
                <td>Criado:</td>
                <td>Att:</td>
                <td>Ações:</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuarios)
                <tr>
                    <td>{{ $usuarios->id }}</td>
                    <td>{{ $usuarios->nome }}</td>
                    <td>{{ $usuarios->cpf }}</td>
                    <td>{{ $usuarios->created_at }}</td>
                    <td>{{ $usuarios->updated_at }}</td>
                    <td><a href="{{ route('editarUser', ['id' => $usuarios->id]) }}" class="btn btn-info btn-sm">Editar</a>

                        <a href="{{ route('excluirUser', ['id' => $usuarios->id]) }}" class="btn btn-danger btn-sm">Excluir</a>

                        <a href="{{ route('novoUser') }}" class="btn btn-warning btn-sm">Novo</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="5">
                    Numero de registros: {{ \App\Models\Usuario::count() }}
                </th>
            </tr>
        </tfoot>
    </table>

@endsection
