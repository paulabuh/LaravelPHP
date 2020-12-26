<html>
    <body>
        <h3>Cadastro de sala</h3>
        <div class="row">
            <form action="/salas" enctype="multipart/form-data" method="POST">
                @csrf
                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ old('nome') }}">
                    @if($errors->first('nome')!='')
                    <div class="alert alert-danger">
                    {{$errors->first('nome')}}
                    </div>
                    @endif
                </p>
                <p>
                    <label for="qtdAlunos">Quantidade de Alunos:</label>
                    <input type="text" name="qtdAlunos" value="{{ old('qtdAlunos') }}">
                    {{$errors->first('qtdAlunos')}}
                </p>
                <p>
                    <label for="ativo">Ativo: (0-ativo e 1-desativado)</label>
                    <input type="text" name="ativo" value="{{ old('ativo') }}">
                    {{$errors->first('ativo')}}
                </p>
                <p>
                    <label for="projetor">Projetor: (0-Não 1-Sim)</label>
                    <input type="text" name="projetor" value="{{ old('projetor') }}">
                    {{$errors->first('projetor')}}
                </p>
                <p>
                    <label for="imagem">Imagem:</label>
                    <input type="file" name="imagem">
                    {{$errors->first('imagem')}}
                    <p>Clique no botão para carregar a imagem</p>
                </p>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </body>
</html>
