<html>
    <body>
        <h3>Lista das salas</h3>
        @can('create', App\Sala::class)
        <p><a href="salas/create">Adicionar Sala</a></p>
        @endcan
        <br>
        Quantidade de registros: {{count($salas)}}
        <table>
            <tr>
                <td>Código</td>
                <td>Nome</td>
                <td>Quantiodade de alunos</td>
                <td>Ativo</td>
                <td>Imagem</td>
            </tr>
            @forelse($salas as $sala)
            <tr>
                <td>{{$sala->id}}</td>
                <td>{{$sala->nome}}</td>
                <td>{{$sala->qtdAlunos}}</td>
                <td>{{$sala->ativo}}</td>
                <td><img src="{{ url('storage/salas/tetetete.png') }}"></td>
            </tr>
            @empty
            Não há salas.
            @endforelse
        </table>
        {{$salas->links()}}
    </body>
</html>
