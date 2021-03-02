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

Route::get('/', 'InicialController@index');

Route::get('/unisebra-cursos', 'InicialController@cursos')->name('unisebra-cursos');

Route::get('/unisebra-curso/{id}', 'InicialController@curso')->name('unisebra-curso');

Auth::routes();

// Broadcast::routes();

Route::middleware(['auth'])->group(function(){

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redimento', 'HomeController@redimento')->name('redimento');

Route::get('/usuarios', 'HomeController@usuarios')->name('usuarios');

Route::get('/usuario', 'HomeController@usuario')->name('usuario');

// Route::get('/cursos', 'HomeController@cursos')->name('cursos');

Route::get('/forms', 'HomeController@forms')->name('forms');

Route::get('/eventos', 'HomeController@eventos')->name('eventos');

Route::get('/balanciamento', 'HomeController@balanciamento')->name('balanciamento');

Route::get('/config', 'HomeController@config')->name('config');

// 

Route::resource('/admin', 'AdmController');

// 
Route::get('/cursos', 'CursosController@index');

// Route::get('/cursos', 'CursosController@show');

Route::get('/cursos/create', 'CursosController@create');

Route::get('/cursos/editar/{id}', 'CursosController@edit');

Route::get('/cursos/editar/modulo/{id}', 'CursosController@editemodulo');

Route::get('/cursos/editar/preco/{id}', 'CursosController@editepreco');

Route::get('/cursos/editar/descricao/{id}', 'CursosController@editedescricao');


Route::get('/cursos/ver/{id}', 'CursosController@show');

Route::get('/cursos/preco/ver/{id}', 'CursosController@verpreco');

Route::get('/cursos/modalidade/{id}', 'CursosController@vermodulos');

Route::get('/cursos/descricao/ver/{id}', 'CursosController@verdescricao');


Route::post('/cursos/update/{id}', 'CursosController@update');

Route::post('/cursos/update/modulo/{id}', 'CursosController@updatemodulo');

Route::post('/cursos/update/descricao/{id}', 'CursosController@updatedescricao');

Route::post('/cursos/update/preco/{id}', 'CursosController@updatepreco');


Route::post('/cursos/store', 'CursosController@store');

Route::post('/cursos/preco', 'CursosController@preco');

Route::post('/cursos/modulos', 'CursosController@modulos');

Route::post('/cursos/descricao', 'CursosController@descricao');



Route::get('/cursos/finalizar/{id}', 'CursosController@finalizar');

Route::get('/cursos/finalizar/preco/{id}', 'CursosController@finalizarpreco');

Route::get('/cursos/finalizar/modalidade/{id}', 'CursosController@finalizarmodalidade');

Route::get('/cursos/finalizar/descricao/{id}', 'CursosController@finalizardescricao');

// 
Route::get('/cursos/createmodulos', 'CursosController@');
Route::get('/cursos/createpreco', 'CursosController@createpreco');
Route::get('/cursos/createdescricao', 'CursosController@createdescricao');
Route::get('/cursos/createmodulos', 'CursosController@createmodulos');
// 

// 
Route::get('/inicial', 'TelaInicialController@index')->name('inicial');

Route::get('/inicial-editar-carrosel', 'TelaInicialController@edite')->name('inicial-editar-carrosel');
Route::get('/inicial-editar-cards', 'TelaInicialController@editeum')->name('inicial-editar-cards');
Route::get('/inicial-editar-motivacao', 'TelaInicialController@editedois')->name('inicial-editar-motivacao');
Route::get('/inicial-editar-instrutores', 'TelaInicialController@editetres')->name('inicial-editar-instrutores');
Route::get('/inicial-editar-perguntas', 'TelaInicialController@editequatro')->name('inicial-editar-perguntas');

// Route::get('/inicial/deletar', 'TelaInicialController@index')->name('inicial');

Route::post('/inicial-editar-carrosel/mais', 'TelaInicialController@createcarro');
Route::post('/inicial-editar-cards/mais', 'TelaInicialController@createcard');
Route::post('/inicial-editar-motivacao/mais', 'TelaInicialController@createmotivacao');
Route::post('/inicial-editar-motivacao/motivo/mais', 'TelaInicialController@createmotivacaomotivo');
Route::post('/inicial-editar-instrutores/mais', 'TelaInicialController@createinst');
Route::post('/inicial-editar-instrutores/area/mais', 'TelaInicialController@createinstarea');
Route::post('/inicial-editar-perguntas/mais', 'TelaInicialController@createper');

Route::get('/inicial-editar-carrosel/deletar/{id}', 'TelaInicialController@destroycarr');
Route::get('/inicial-editar-cards/deletar/{id}', 'TelaInicialController@destroycard');
Route::get('/inicial-editar-motivacao/deletar/{id}', 'TelaInicialController@destroymotivacao');
Route::get('/inicial-editar-motivacao/motivo/deletar/{id}', 'TelaInicialController@destroymotivo');
Route::get('/inicial-editar-instrutores/area/deletar/{id}', 'TelaInicialController@destroyinstarea');
Route::get('/inicial-editar-instrutores/deletar/{id}', 'TelaInicialController@destroyinst');
Route::get('/inicial-editar-perguntas/deletar/{id}', 'TelaInicialController@destroyperg');

Route::get('/inicial-editar-carrosel/editar/{id}', 'TelaInicialController@editecarrosel');
Route::get('/inicial-editar-cards/editar/{id}', 'TelaInicialController@editecard');
Route::get('/inicial-editar-motivacao/editar/{id}', 'TelaInicialController@editemotivacao');
Route::get('/inicial-editar-motivacao/area/editar/{id}', 'TelaInicialController@editemotivacaoarea');
Route::get('/inicial-editar-instrutores/editar/{id}', 'TelaInicialController@editeinstrutores');
Route::get('/inicial-editar-instrutores/area/editar/{id}', 'TelaInicialController@editeinstrutoresarea');
Route::get('/inicial-editar-perguntas/editar/{id}', 'TelaInicialController@editeperguntas');

Route::post('/inicial-editar-carrosel/update/{id}', 'TelaInicialController@updatecarrosel');
Route::post('/inicial-editar-card/update/{id}', 'TelaInicialController@updatecard');
Route::post('/inicial-editar-motivacao/update/{id}', 'TelaInicialController@updatemotivacao');
Route::post('/inicial-editar-motivacao/area/update/{id}', 'TelaInicialController@updatemotivacaoarea');
Route::post('/inicial-editar-instrutores/update/{id}', 'TelaInicialController@updateinstrutores');
Route::post('/inicial-editar-instrutores/area/update/{id}', 'TelaInicialController@updateinstrutoresarea');
Route::post('/inicial-editar-perguntas/update/{id}', 'TelaInicialController@updateperguntas');

});


// Route::get('/aluno/login','Aluno\Auth\Login@index');

Route::get('/aluno/home','Aluno\AlunoController@index');

Route::get('/aluno/financeiro','Aluno\AlunoController@financeiro');

Route::get('/aluno/cursos','Aluno\AlunoController@cursos');

Route::get('/aluno/secretaria','Aluno\AlunoController@secretaria');

Route::get('/aluno/finalizar','Aluno\AlunoController@finalizar');

// Route::view('/aluno/login','aluno\auth\login');

Route::view('/aluno/login','aluno\auth\login');

Route::post('/aluno/login_aluno','Aluno\Auth\Login@login');

// Route::view('/aluno/home','aluno\home');

// Route::view('/aluno/secretaria','aluno\secretaria');

// Route::view('/aluno/financeiro','aluno\financeiro');

Route::post('/alunoregister','Aluno\Auth\Login@register');

Route::view('/aluno/register','aluno\auth\register');

// Route::resource('/aluno/login','Aluno\Auth\Login@index');



Route::middleware(['auth'])->group(function(){

    // Route::resource('/aluno','Aluno/AlunoController');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
