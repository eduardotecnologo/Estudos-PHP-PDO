<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello_world', 'HelloWorldController@index');
Route::view('bem-vindo','bemvindo',['name' => 'Eduardo Developer']);
// Route::get('/post/{slug}', function($slug){
//     return $slug;
// });
Route::get('/post/{slug?}',function($slug = null){
    return !is_null($slug) ? $slug : 'Comportamento sem a existência do param slug';
});
// Regex em Parâmetros
