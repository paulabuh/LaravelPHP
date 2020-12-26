@extends('layouts.app')

@section('content')
<html>
    <body>
        <h3>Editar Talento</h3>
        <div>
            <form action="/talentos/{{$talento->id}}" method="POST">
                @method('PUT')
                @csrf
                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{$talento->nome}}">
                </p>
                <p>
                    <label for="matricula">Matrícula:</label>
                    <input type="text" name="matricula" value="{{$talento->matricula}}">
                </p>
                <p>
                    <label for="instituto">Instituto</label>
                    <input type="text" name="instituto" value="{{$talento->instituto}}">
                </p>
                <p>
                    <label for="funcao">Função</label>
                    <input type="text" name="funcao" value="{{$talento->funcao}}">
                </p>
                <p>
                    <label for="atividade">Atividade que executa</label>
                    <input type="text" name="atividade" value="{{$talento->atividade}}">
                </p>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </body>
</html>
@endsection
