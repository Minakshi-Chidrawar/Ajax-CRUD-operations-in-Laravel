<?php

Route::get('/', 'IndexController@index');
Route::post('addName', 'IndexController@store');
Route::post('deleteName', 'IndexController@destroy');
Route::post('selectWinner', 'IndexController@show');