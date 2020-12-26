<?php

namespace BancoTalentos\Http\Controllers;

use BancoTalentos\Models\Talento;
use Illuminate\Http\Request;
use Illuminate\Support\Facace\Session;

class TalentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talentos = Talento::paginate(10);
        
        return view('talentos.index', compact('talentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $error='';
        return view('talentos.create', compact('error'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(
            [
                'nome'=>'required|min:3',
                'matricula'=>'required|integer',
                'instituto'=>'required',
                'funcao'=>'required',
                'atividade'=>'required'
            ]
        );

        $talentos = Talento::where('matricula', '=', $request['matricula'])->get();
        //dd($talentos);
        if (count($talentos) > 0){
            return view('talentos.create')->with('error','Essa matríula já existe.');
        }

        Talento::create($request->except('_token'));

        //Session::flash('flash_message','Talento criado com sucesso!');

        return redirect('talentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \BancoTalentos\Models\Talento  $talento
     * @return \Illuminate\Http\Response
     */
    public function show(Talento $talento)
    {
        return view('talentos.show', compact('talento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \BancoTalentos\Models\Talento  $talento
     * @return \Illuminate\Http\Response
     */
    public function edit(Talento $talento)
    {
        $error='';
        return view('talentos.edit')->with('talento',$talento)->with('error',$error);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \BancoTalentos\Models\Talento  $talento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talento $talento)
    {
        request()->validate(
            [
                'nome'=>'required|min:3',
                'matricula'=>'required|integer',
                'instituto'=>'required',
                'funcao'=>'required',
                'atividade'=>'required'
            ]
        );

        //$error='';
        /*if ($request['matricula'] != $talento->matricula){
            $talentos = Talento::where('matricula', '=', $request['matricula'])->get();
            if (count($talentos) > 0){
                return view('talentos.show')->with('talento',$talento)->with('error','Essa matríula já existe.');
            }
        }*/

        $talento->update($request->except('_token'));

        //Session::flash('flash_message','Talento atualizado com sucesso!');

        return redirect('talentos/'.$talento->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \BancoTalentos\Models\Talento  $talento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talento $talento)
    {
        
        $talento->delete();

        //Session::flash('flash_message','Talento excluído com sucesso!');

        return redirect('talentos');
    }
}
