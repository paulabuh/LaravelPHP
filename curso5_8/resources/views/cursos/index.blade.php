<html>
    <body>
        <h3>Lista de cursos</h3>
        <table>
            <tr>
                <td>Código</td>
                <td>Nome</td>
                <td>Ativo</td>
                <td>Status</td>
            </tr>
            @foreach($cursos as $curso)
            <tr>
                <td>{{$curso->id}}</td>
                <td>{{$curso->nome}}</td>
                <td>{{$curso->ativo}}</td>
                <td>{{$curso->status}}</td>
            </tr>
            @endforeach
        </table>
        {{$cursos->links()}}
    </body>
</html>
