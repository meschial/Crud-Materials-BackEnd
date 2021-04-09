<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'materiais'], function() use($router){
    $router->get('/', 'MaterialsController@index');
    $router->get('/{id}', 'MaterialsController@show');
    $router->post('/', 'MaterialsController@store');
    $router->put('/{id}', 'MaterialsController@update');
    $router->delete('/{id}', 'MaterialsController@destroy');
});