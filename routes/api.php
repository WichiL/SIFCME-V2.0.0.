<?php

use Illuminate\Http\Request;


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

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', 'Auth\LoginController@logout');

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResources(['users' => 'API\UserController']);
    Route::apiResources(['generales' => 'Creditos\DatosGenerales']);
    Route::apiResources(['estructura' => 'Creditos\Estructuras']);
    Route::get('estados', 'Funciones@listarEstados');
    Route::get('municipios/{name}', 'Funciones@listarMunicipios');
    Route::get('coloniass/{cp}', 'Funciones@listarColonias');
    Route::post('register', 'Auth\RegisterController@register');
    Route::patch('settings/profile', 'Settings\ProfileController@update');
    Route::patch('settings/password', 'Settings\PasswordController@update');
});

Route::group(['middleware' => 'guest:api'], function () {
    Route::post('login', 'Auth\LoginController@login');
    Route::post('oauth/{driver}', 'Auth\OAuthController@redirectToProvider');
    Route::get('oauth/{driver}/callback', 'Auth\OAuthController@handleProviderCallback')->name('oauth.callback');
});
