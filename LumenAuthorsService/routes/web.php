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

$router->get('/authors',  ['uses' => 'AuthorController@index']);
$router->post('/authors',  ['uses' => 'AuthorController@store']);
$router->put('/authors/{author}',  ['uses' => 'AuthorController@update']);
$router->delete('/authors/{author}',  ['uses' => 'AuthorController@destroy']);
$router->get('/authors/{author}',  ['uses' => 'AuthorController@show']);