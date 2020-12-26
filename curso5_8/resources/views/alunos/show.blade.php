<html>
    <body>
        <h2>Detalhes do Aluno {{$aluno->nome}}</h2>
        <p><a href="/alunos/{{$aluno->id}}/edit">[Editar]</a></p>
        <p>
            <form action="/alunos/{{$aluno->id}}" method="POST">
                @method('DELETE')    
                @csrf
                <button type="submit" class="btn btn-primary">Deletar</button>
            </form>
        </p>
        
        <div class="row">
            <p><strong>RA: </strong>{{$aluno->ra}}</p>
            <p><strong>Nome: </strong>{{$aluno->nome}}</p>
            <p><strong>Sobrenome: </strong>{{$aluno->sobrenome}}</p>
            <p><strong>Endereço: </strong>{{$aluno->endereco}}</p>            
        </div>
    </body>
</html>
