<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::post('register', 'Api\CutsomerController@register');
Route::post('login', 'Api\CutsomerController@login');
Route::get('product', 'Api\SkinCareController@index');
Route::get('article','Api\ArticleController@index');
Route::get('recomendation','Api\RecomendationController@index');
Route::get('recomendation/{id}','Api\RecomendationController@getbyId');
Route::get('product/{id}','Api\SkinCareController@getbyId');
Route::post('histori', 'Api\HistoriController@store');
Route::get('histori/{id}', 'Api\HistoriController@getbyId');