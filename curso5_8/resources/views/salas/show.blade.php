<html>
    <body>
        <h2>Detalhes da Sala {{$sala->nome}}</h2>
        <p><a href="/salas/{{$sala->id}}/edit">[Editar]</a></p>
        <p><a href="{{route('listaSalas')}}">[Listar Salas]</a></p>
        <p>
            <form action="/salas/{{$sala->id}}" method="POST">
                @method('DELETE')    
                @csrf
                <button type="submit" class="btn btn-primary">Deletar</button>
            </form>
        </p>
        <div class="row">
            <p><strong>Código: </strong>{{$sala->id}}</p>
            <p><strong>Nome: </strong>{{$sala->nome}}</p>
            <p><strong>Quantidade de alunos: </strong>{{$sala->qtdAlunos}}</p>
            <p><strong>Ativo (0-ativo e 1-desativado): </strong>{{$sala->ativo}}</p>
            <p><strong>Projetor (0-Não 1-Sim): </strong>{{$sala->projetor}}</p>
        </div>
    </body>
</html>
