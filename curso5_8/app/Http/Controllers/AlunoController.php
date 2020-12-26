<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index(){
        $alunos = Aluno::paginate(15);
        //$alunos = Aluno::all();
        //dd($alunos);

        return view('alunos.index', compact('alunos'));
    }

    public function create(){
        
        return view('alunos.create');

    }

    public function store(Request $request){
        
        /*$aluno = new Aluno();

        $aluno->ra = $request['ra'];
        $aluno->nome = $request['nome'];
        $aluno->sobrenome = $request['sobrenome'];
        $aluno->nomeCompleto = $request['nome'] . ' ' . $request['sobrenome'];
        $aluno->endereco = $request['endereco'];

        $aluno->save();

        return back();*/

        Aluno::create($request->except('_token'));

        return redirect('alunos');
    }

    public function show(Aluno $aluno){
        
        //$aluno = Aluno::findOrFail($id);

        return view('alunos.show', compact('aluno'));

    }

    public function showByRA($ra){
        
        $alunos = Aluno::where('ra', '=', $ra)->get();
        //dd($ra);
        //dd($aluno);

        // um retorno
        //return view('alunos.show', compact('aluno'));

        // mais de um retorno
        return view('alunos.index', compact('alunos'));

    }

    public function showByParteDoNome($nome){
        
        $alunos = Aluno::where('nomeCompleto', 'like', '%'.$nome.'%')->get();
        //dd($ra);
        //dd($aluno);

        // um retorno
        //return view('alunos.show', compact('aluno'));

        // mais de um retorno
        return view('alunos.index', compact('alunos'));

    }

    public function edit(Aluno $aluno){
        
        return view('alunos.edit', compact('aluno'));

    }

    public function update(Request $request, Aluno $aluno){
        
        $aluno->update($request->except('_token'));

        return redirect('alunos/'.$aluno->id);

    }

    public function destroy(Aluno $aluno){
        
        $aluno->delete();

        return redirect('alunos');

    }

    public function alunosComRA(){
        $alunos = Aluno::AlunosComRA()->paginate(15);
        
        return view('alunos.index', compact('alunos'));
    }

}
