<html>
    <body>
        <h3>Editar sala</h3>
        <div class="row">
            <form action="/salas/{{$sala->id}}" method="POST">
                @method('PUT')
                @csrf
                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{$sala->nome}}">
                </p>
                <p>
                    <label for="qtdAlunos">Quantidade de Alunos:</label>
                    <input type="text" name="qtdAlunos" value="{{$sala->qtdAlunos}}">
                </p>
                <p>
                    <label for="ativo">Ativo: (0-ativo e 1-desativado)</label>
                    <input type="text" name="ativo" value="{{$sala->ativo}}">
                </p>
                <p>
                    <label for="projetor">Projetor: (0-Não 1-Sim)</label>
                    <input type="text" name="projetor" value="{{$sala->projetor}}">
                </p>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </body>
</html>
