<?php

use Illuminate\Http\Request;
use App\Person;

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
// Route::post('register', 'API\RegisterController@register');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/person', function(){
//     $person = [
//         'first_name' => 'Sean',
//         'last_name' => 'Moon',
//     ];

//     return $person;
// });
Route::get('/person/{person}', 'PersonController@show');