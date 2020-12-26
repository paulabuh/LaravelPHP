@extends('layouts.app')

@section('content')
<html>
    <body>
        <h3>Cadastro de Talento</h3>
        <div>
            <form action="/talentos" enctype="multipart/form-data" method="POST">
                @csrf
                @if($error!='')
                    <div class="alert alert-danger">
                    {{$error}}
                    </div>
                @endif
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
                    <label for="matricula">Matricula:</label>
                    <input type="text" name="matricula" value="{{ old('matricula') }}">
                    @if($errors->first('matricula')!='')
                    <div class="alert alert-danger">
                    {{$errors->first('matricula')}}
                    </div>
                    @endif
                </p>
                <p>
                    <label for="instituto">Instituto:</label>
                    <input type="text" name="instituto" value="{{ old('instituto') }}">
                    @if($errors->first('instituto')!='')
                    <div class="alert alert-danger">
                    {{$errors->first('instituto')}}
                    </div>
                    @endif
                </p>
                <p>
                    <label for="funcao">Função:</label>
                    <input type="text" name="funcao" value="{{ old('funcao') }}">
                    @if($errors->first('funcao')!='')
                    <div class="alert alert-danger">
                    {{$errors->first('funcao')}}
                    </div>
                    @endif
                </p>
                <p>
                    <label for="atividade">Atividade que executa:</label>
                    <input type="text" name="atividade" value="{{ old('atividade') }}">
                    @if($errors->first('atividade')!='')
                    <div class="alert alert-danger">
                    {{$errors->first('atividade')}}
                    </div>
                    @endif
                </p>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </body>
</html>
@endsection