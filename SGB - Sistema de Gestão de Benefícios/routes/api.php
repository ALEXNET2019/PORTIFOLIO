<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('cliente','App\Http\Controllers\ClienteController');
Route::apiResource('cliente','App\Http\Controllers\ClienteController');
Route::apiResource('administradora','App\Http\Controllers\AdministradorasController');
Route::apiResource('arquivoLeituraModelo','App\Http\Controllers\ArquivoLeituraModeloController');
Route::apiResource('ativEco','App\Http\Controllers\AtivEcoController');
Route::apiResource('bancos','App\Http\Controllers\bancosController');
Route::apiResource('carencias','App\Http\Controllers\CarenciasController');
Route::apiResource('cnabs','App\Http\Controllers\CnabsController');
Route::apiResource('coberturas','App\Http\Controllers\CoberturasController');
Route::apiResource('companhia','App\Http\Controllers\CompanhiaController');
Route::apiResource('contasPagar','App\Http\Controllers\ContasPagarController');
Route::apiResource('contasReceber','App\Http\Controllers\ContasReceberController');
Route::apiResource('contratos','App\Http\Controllers\ContratosController');
Route::apiResource('corretores','App\Http\Controllers\CorretoresController');
Route::apiResource('fornecedores','App\Http\Controllers\FornecedoresController');
Route::apiResource('historicoCobrancas','App\Http\Controllers\HistoricoCobrancasController');
Route::apiResource('home','App\Http\Controllers\HomeController');
Route::apiResource('instituicoesFinanceiras','App\Http\Controllers\InstituicoesFinanceirasController');
Route::apiResource('modeloCnabs','App\Http\Controllers\ModeloCnabsController');
Route::apiResource('modelosDoc','App\Http\Controllers\ModelosDocController');
Route::apiResource('necessidadeDores','App\Http\Controllers\NecessidadeDoresController');
Route::apiResource('ocorrenciaCobrancas','App\Http\Controllers\OcorrenciaCobrancasController');
Route::apiResource('ocorrenciasCnab','App\Http\Controllers\OcorrenciasCnabController');
Route::apiResource('ocorrenciasHistori','App\Http\Controllers\OcorrenciasHistoriController');
Route::apiResource('orcamentos','App\Http\Controllers\OrcamentosController');
Route::apiResource('planos','App\Http\Controllers\PlanosController');
Route::apiResource('propostas','App\Http\Controllers\PropostasController');
Route::apiResource('prospeccao','App\Http\Controllers\ProspeccaoController');
Route::apiResource('remessaRetornoHistorico','App\Http\Controllers\RemessaRetornoHistoricoController');
Route::apiResource('segmentos','App\Http\Controllers\SegmentosController');
Route::apiResource('tabelaPrecos','App\Http\Controllers\TabelPrecosController');