<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Symfony\Component\CssSelector\Node\FunctionNode;

Route::get('/', function () {
    return view('welcome');
});

Route::get('salas', 'SalaController@index')->name('listaSalas');
Route::get('salas/create', 'SalaController@create');
Route::post('salas', 'SalaController@store');
Route::get('salas/{sala}', 'SalaController@show')->middleware('can:view,sala');
Route::get('salas/{sala}/edit', 'SalaController@edit');
Route::put('salas/{sala}', 'SalaController@update');
Route::delete('salas/{sala}', 'SalaController@destroy');
// Essa rota cria todas as 7 rotas acima
//Route::resource('salas', 'SalaController');

Route::get('maisDeVinte', 'SalaController@salasComMaisDeVinteAlunos');

//Route::get('salas/{sala}', 'SalaController@show')->middleware('can:view,sala');

Route::get('alunos', 'AlunoController@index');
Route::get('alunos/create', 'AlunoController@create');
Route::post('alunos', 'AlunoController@store');
Route::get('alunos/{aluno}', 'AlunoController@show');
Route::get('alunos/ra/{ra}', 'AlunoController@showByRA'); 
Route::get('alunos/nome/{nome}', 'AlunoController@showByParteDoNome'); 
Route::get('alunos/{aluno}/edit', 'AlunoController@edit');
Route::put('alunos/{aluno}', 'AlunoController@update');
Route::delete('alunos/{aluno}', 'AlunoController@destroy');

Route::get('alunosComRA', 'AlunoController@alunosComRA');

Route::get('cursos', 'CursoController@index');

Route::get('materias', 'MateriaController@index');

Route::get('qualSeuNome/{nome}/{id?}', function($nome, $id=0){
    return 'Meu nome é '.$nome.'. E o id é '.$id;
});

Route::get('html', function(){
    return view('home');
});

Route::post('sala/cadastrar', function(Illuminate\Http\Request $request){
    return 'cadastrou a sala nome '.$request->nome;
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function(){
    //Route::resource('salas', 'SalaController');
});


