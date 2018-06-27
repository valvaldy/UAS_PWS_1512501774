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

$router->get('/mhs1','mhscontroller@index');
$router->get('/mhs1/{id}','mhscontroller@showmahasiswa');
$router->post('/mhs1','mhscontroller@storemahasiswa');
$router->put('/mhs1/{id_mhs}','mhscontroller@updatemahasiswa');
$router->delete('/mhs1/{id_mhs}','mhscontroller@destroymahasiswa');

