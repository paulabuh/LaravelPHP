<html>
    <body>
        <h3>Lista das Materias</h3>
        <table>
            <tr>
                <td>Código</td>
                <td>Nome</td>
                <td>Quantiodade de alunos</td>
                <td>Ativo</td>
                <td>Status</td>
            </tr>
            @foreach($materias as $materia)
            <tr>
                <td>{{$materia->id}}</td>
                <td>{{$materia->nome}}</td>
                <td>{{$materia->qtdAlunos}}</td>
                <td>{{$materia->ativo}}</td>
                <td>{{$materia->status}}</td>
            </tr>
            @endforeach
        </table>
        {{$materias->links()}}
    </body>
</html>
