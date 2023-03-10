<?php

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

Route::get('usuarios', 'UsuarioController@getUsers');

Route::post('login', 'UsuarioController@login');


Route::post('v2/login', 'UserController@login');

Route::group(['middleware' => ['jwt']], function () {
    Route::post('validate_token', 'UsuarioController@validateToken');

    // Reportes
    Route::get('reportes', 'ReporteController@getReports');
    Route::post('reportes', 'ReporteController@insertReport');
    Route::put('reportes/tipo', 'ReporteController@updateReportType');
    Route::delete('reportes', 'ReporteController@deleteReport');
    Route::get('reportes/seguimiento', 'ReporteController@getPendingFeedback');
    Route::post('reportes/seguimiento', 'ReporteController@insertFeedback');
    Route::delete('reportes/seguimiento', 'ReporteController@deleteFeedback');

    // Apoyos
    Route::get('apoyos', 'ApoyoController@getSupports');
    Route::post('apoyos', 'ApoyoController@addSupportRequest');
    Route::put('apoyos', 'ApoyoController@updateSupportRequestStatus');

    // Beneficiarios
    Route::post('beneficiarios', 'BeneficiarioController@insertBeneficiary');
    Route::post('beneficiarios/buscar', 'BeneficiarioController@searchBeneficiary');
});
