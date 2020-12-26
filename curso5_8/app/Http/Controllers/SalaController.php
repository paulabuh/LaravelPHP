<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;
use App\Http\Middleware\ExampleMiddleware;
use App\Mail\CriarSalaMail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class SalaController extends Controller
{
    public function __construct(){
        
        $this->middleware(ExampleMiddleware::class);
        //$this->middleware('auth')->except(['index']);

    }

    public function index(){
        
        $salas = Sala::paginate(10);
        //$salas = Sala::all();
        //dd($salas);
        
        return view('salas.index', compact('salas'));

    }

    public function create(){
        
        return view('salas.create');

    }

    public function store(Request $request){
        
        /*$sala = new Sala();

        $sala->nome = $request['nome'];
        $sala->qtdAlunos = $request['qtdAlunos'];
        $sala->ativo = $request['ativo'];
        $sala->projetor = $request['projetor'];

        $sala->save();

        return back();*/

        //$this->authorize('create',Sala::class);

        request()->validate(
            [
                'nome'=>'required|min:3',
                'qtdAlunos'=>'required|integer',
                'ativo'=>'required|integer',
                'projetor'=>'required|integer',
                'imagem'=>'required|image'
            ]
        );

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            // kebab_case trata os caracteres especiais
            //$nome = kebab_case($request['imagem']);
            $extension = $request->imagem->extension();
            $nome_arquivo = $request['nome'].'.'.$extension;
            //armazena arquivo
            $upload = $request->imagem->storeAs('public/salas',$nome_arquivo);
            $data['imagem'] = $nome_arquivo;
            //caso tenha problema no armazenamento
            if (!$upload){
                return redirect()->back()->with('error','Falha ao fazer upload da imagem.');
            }
        } else {
            $data['imagem'] = null;
        }


        Sala::create($request->except('_token'));

        $dadosEmail['nomeSala'] = $request['nome'];
        Mail::to('pabueno@unicamp.br')->send(new CriarSalaMail($dadosEmail));

        return redirect('salas');
    }

    public function show(Sala $sala){
        
       // $sala = Sala::findOrFail($id);

        return view('salas.show', compact('sala'));
        //return view('salas.show')->with('sala',$sala)->with('outra',$outra);

    }

    public function edit(Sala $sala){
        
        return view('salas.edit', compact('sala'));

    }

    public function update(Request $request, Sala $sala){
        
        $sala->update($request->except('_token'));

        return redirect('salas/'.$sala->id);

    }

    public function destroy(Sala $sala){
        
        $this->authorize('delete',$sala);

        $sala->delete();

        //Auth::logout();

        return redirect('salas');

    }

    public function salasComMaisDeVinteAlunos(){
        $salas = Sala::TemMaisDeVinteAlunos()->paginate(10);
        
        return view('salas.index', compact('salas'));

    }

    public function salasTemAlunos(){
        $salas = Sala::TemAlunos()->paginate(10);
        
        return view('salas.index', compact('salas'));

    }
}
