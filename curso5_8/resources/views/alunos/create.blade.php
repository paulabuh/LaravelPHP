<html>
    <body>
        <h3>Cadastro de aluno</h3>
        <div class="row">
            <form action="/alunos" method="POST">
                @csrf
                <p>
                    <label for="ra">RA:</label>
                    <input type="text" name="ra">
                </p>
                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                </p>
                <p>
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" name="sobrenome">
                </p>
                <p>
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco">
                </p>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </body>
</html>
