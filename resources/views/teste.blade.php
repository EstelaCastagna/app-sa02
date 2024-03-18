@extends ('layouts.app')
@section ('content')
<div class="container">
    <h1>AAAAAAAAAAAAAAAA</h1>
    <p>Só a mente do palhaço</p>
    <p> Seja bem vindo {{$name}} </p>
    <h2> Disciplinas: </h2>
    <ul class="list-group">
        @foreach($disciplinas as $disciplina)
        <li class="list-group-item btn-lista btn-primary text-start lista-disc">{{$disciplina}}</li>

        @endforeach
    </ul>
    <a class="btn btn-aviso my-2" href = "{{ route ('inicio')}}">Voltar para o início</a>
</div>

@endsection
