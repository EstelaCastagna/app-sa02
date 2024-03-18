@extends('layouts.app')

@section('content')

<table class="table table-hover table-striped">
<thead>
<tr>
<td>ID</td>
<td>Disciplina</td>
<td>Criado:</td>
<td>Att:</td>
</tr>
</thead>
<tbody>
@foreach ($disciplinas as $disciplina)
<tr>
<td>{{$disciplina->id}}</td>
<td>{{$disciplina->disciplina}}</td>
<td>{{$disciplina->created_at}}</td>
<td>{{$disciplina->updated_at}}</td>
</tr>
@endforeach
</tbody>
</table>

@foreach ($disciplinas as $disciplina)
<li></li>
@endforeach

@endsection