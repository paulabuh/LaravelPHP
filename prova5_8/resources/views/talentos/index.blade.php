@extends('layouts.app')

@section('content')
<html>
    <body>
        <h3>Lista de Talentos</h3>
        
        <p>
            <form action="/talentos/create">
                <button type="submit" class="btn btn-primary">Adicionar Talento</button>
            </form>
        </p>
        
        <br>
        Quantidade de registros: {{count($talentos)}}
        <table class="table">
            <tr>
                <td>Editar</td>    
                <td>Visualizar</td>
                <td>Código</td>
                <td>Nome</td>
                <td>Matrícula</td>
                <td>Instituto</td>
                <td>Função</td>
                <td>Atividade</td>
            </tr>
            @forelse($talentos as $talento)
            <tr>
                <td><a href="/talentos/{{$talento->id}}/edit">Editar</a></td>
                <td><a href="/talentos/{{$talento->id}}">Ver</a></td>
                <td>{{$talento->id}}</td>
                <td>{{$talento->nome}}</td>
                <td>{{$talento->matricula}}</td>
                <td>{{$talento->instituto}}</td>
                <td>{{$talento->funcao}}</td>
                <td>{{$talento->atividade}}</td>
            </tr>
            @empty
            Não há talentos.
            @endforelse
        </table>
        {{$talentos->links()}}
    </body>
</html>
@endsection
