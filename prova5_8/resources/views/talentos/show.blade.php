@extends('layouts.app')

@section('content')

<html>
    <body>
        <h2>Detalhes do Talento {{$talento->nome}}</h2>
        
        <p>
            <form action="/talentos">
                <button type="submit" class="btn btn-primary">Listar Todos os Talentos</button>
            </form>
        </p>
        <p>
            <form action="/talentos/{{$talento->id}}/edit">
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </p>
        <p>
            <form action="/talentos/{{$talento->id}}" method="POST">
                @method('DELETE')    
                @csrf
                <button type="submit" class="btn btn-primary">Deletar</button>
            </form>
        </p>
        <div>
            <p><strong>Código: </strong>{{$talento->id}}</p>
            <p><strong>Nome: </strong>{{$talento->nome}}</p>
            <p><strong>Matrícula: </strong>{{$talento->matricula}}</p>
            <p><strong>Instituto: </strong>{{$talento->instituto}}</p>
            <p><strong>Função: </strong>{{$talento->funcao}}</p>
            <p><strong>Ativdade: </strong>{{$talento->atividade}}</p>
        </div>
    </body>
</html>

@endsection
