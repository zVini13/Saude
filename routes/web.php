<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/createLogin', 'App\Http\Controllers\UsuarioController@logar')->name('login');
Route::post('/saveLogin', 'App\Http\Controllers\UsuarioController@validarlogin')->name('validarlogin');
Route::get('/createLogout', 'App\Http\Controllers\UsuarioController@logout')->name('logout');

Route::get('/createCadastro', 'App\Http\Controllers\UsuarioController@cadastrar')->name('cadastro');
Route::get('/createRecuperar-senha', 'App\Http\Controllers\UsuarioController@recuperar')->name('recupera');
Route::get('/createAdm', 'App\Http\Controllers\UsuarioController@paginaadm')->name('paginaadm');
Route::get('/createTelaservidor', 'App\Http\Controllers\UsuarioController@telaservidor')->name('telaservidor');
Route::get('/createConfirmarcodigo', 'App\Http\Controllers\UsuarioController@confirma')->name('confirma');
Route::get('/editRedefinirsenha', 'App\Http\Controllers\UsuarioController@redefinir')->name('redefinir');
Route::get('/listMedicos', 'App\Http\Controllers\MedicoController@listarmedicos')->name('listarmedicos');
Route::get('/listConsultas', 'App\Http\Controllers\ConsultaController@listarconsultas')->name('listarconsultas');
Route::get('/listCentros', 'App\Http\Controllers\CentroSaudeController@listarcentrosdesaude')->name('listarcentrosdesaude');
Route::get('/listAtendendohoje', 'App\Http\Controllers\MedicoController@atendendohoje')->name('atendendohoje');
Route::get('/listAcontecendohoje', 'App\Http\Controllers\ConsultaController@acontecendohoje')->name('acontecendohoje');
Route::get('/listPlantoes', 'App\Http\Controllers\PlantaoController@plantoes')->name('plantoes');
Route::get('/showMedico', 'App\Http\Controllers\MedicoController@medico')->name('medico');
Route::get('/showCentrodesaude', 'App\Http\Controllers\CentroSaudeController@centrodesaude')->name('centrodesaude');
Route::post('/createdadosusuario', 'App\Http\Controllers\UsuarioController@dadosusuario')->name('dadosusuario');
Route::get('/createCadastroInstituicao', 'App\Http\Controllers\CentroSaudeController@cadastrocentro')->name('cadastrocentro');
Route::get('/createConsulta', 'App\Http\Controllers\ConsultaController@agendarconsulta')->name('agendarconsulta');
Route::post('/saveCentrosaude', 'App\Http\Controllers\CentroSaudeController@centrocadastrado')->name('centrocadastrado');
Route::get('/listCentrosadm', 'App\Http\Controllers\CentroSaudeController@listarcentrosadm')->name('listarcentrosadm');
Route::get('/deleteCentro', 'App\Http\Controllers\CentroSaudeController@excluirCentro')->name('excluirCentro');
Route::get('/editCentro', 'App\Http\Controllers\CentroSaudeController@editCentro')->name('editarCentro');
Route::get('/listConsultasadm', 'App\Http\Controllers\ConsultaController@listarconsultasadm')->name('listarconsultasadm');
Route::get('/deleteConsulta', 'App\Http\Controllers\ConsultaController@excluirConsulta')->name('excluirConsulta');
Route::get('/editConsulta', 'App\Http\Controllers\ConsultaController@editConsulta')->name('editarConsulta');
Route::get('/createPlantoesadm', 'App\Http\Controllers\PlantaoController@agendarplantao')->name('agendarplantao');
Route::get('/listPlantoesadm', 'App\Http\Controllers\PlantaoController@listarplantoesadm')->name('listarplantoesadm');
Route::get('/showPlantao', 'App\Http\Controllers\PlantaoController@plantaocadastrado')->name('plantaocadastrado');
Route::get('/saveConsulta', 'App\Http\Controllers\ConsultaController@consultacadastrada')->name('consultacadastrada');
Route::get('/editPlantao', 'App\Http\Controllers\PlantaoController@editPlantao')->name('editarPlantao');
Route::get('/deletePlantao', 'App\Http\Controllers\PlantaoController@excluirPlantao')->name('excluirPlantao');
Route::get('/listMedicosadm', 'App\Http\Controllers\MedicoController@listarmedicosadm')->name('listarmedicosadm');
Route::get('/editMedico', 'App\Http\Controllers\MedicoController@editMedico')->name('editarMedico');
Route::get('/deleteMedico', 'App\Http\Controllers\MedicoController@excluirMedico')->name('excluirMedico');
Route::get('/createMedico', 'App\Http\Controllers\MedicoController@cadastrarmedico')->name('cadastrarmedico');
Route::get('/showMedicocadastrado', 'App\Http\Controllers\MedicoController@medicocadastrado')->name('medicocadastrado');















