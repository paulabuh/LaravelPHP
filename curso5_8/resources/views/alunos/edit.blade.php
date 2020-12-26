<html>
    <body>
        <h3>Editar aluno</h3>
        <div class="row">
            <form action="/alunos/{{$aluno->id}}" method="POST">
                @method('PUT')    
                @csrf
                <p>
                    <label for="ra">RA:</label>
                    <input type="text" name="ra" value="{{$aluno->ra}}">
                </p>
                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{$aluno->nome}}">
                </p>
                <p>
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" name="sobrenome" value="{{$aluno->sobrenome}}">
                </p>
                <p>
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" value="{{$aluno->endereco}}">
                </p>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </body>
</html>
