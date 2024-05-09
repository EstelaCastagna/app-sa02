@extends('layouts.app')

@section('content')
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Disciplina</td>
                <td>Criado:</td>
                <td>Att:</td>
                <td>Ações:</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($disciplinas as $disciplina)
                <tr>
                    <td>{{ $disciplina->id }}</td>
                    <td>{{ $disciplina->disciplina }}</td>
                    <td>{{ $disciplina->created_at }}</td>
                    <td>{{ $disciplina->updated_at }}</td>
                    <td><a href="{{ route('editar', ['id' => $disciplina->id]) }}" class="btn btn-info btn-sm">Editar</a>

                        <a href="{{ route('excluir', ['id' => $disciplina->id]) }}" class="btn btn-danger btn-sm">Excluir</a>

                        <a href="{{ route('novo') }}" class="btn btn-warning btn-sm">Novo</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="5">
                    Numero de registros: {{ \App\Models\Disciplinas::count() }}
                </th>
            </tr>
        </tfoot>
    </table>

    @foreach ($disciplinas as $disciplina)
        <li></li>
    @endforeach
@endsection
