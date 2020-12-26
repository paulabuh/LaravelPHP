<html>
    <body>
        <h3>Lista de alunos</h3>
        <table>
            <tr>
                <td>Código</td>
                <td>RA</td>
                <td>Nome Completo</td>
                <td>Endereço</td>
            </tr>
            @foreach($alunos as $aluno)
            <tr>
                <td>{{$aluno->id}}</td>
                <td>{{$aluno->ra}}</td>
                <td>{{$aluno->nomeCompleto}}</td>
                <td>{{$aluno->endereco}}</td>
            </tr>
            @endforeach
        </table>
        {{$alunos->links()}}
    </body>
</html>
