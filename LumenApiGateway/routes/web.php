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

/*
* Routes for Author
*/
$router->get('/authors',  ['uses' => 'AuthorController@index']);
$router->post('/authors',  ['uses' => 'AuthorController@store']);
$router->put('/authors/{author}',  ['uses' => 'AuthorController@update']);
$router->delete('/authors/{author}',  ['uses' => 'AuthorController@destroy']);
$router->get('/authors/{author}',  ['uses' => 'AuthorController@show']);


/*
* Routes for Books
*/
$router->get('/books',  ['uses' => 'BookController@index']);
$router->post('/books',  ['uses' => 'BookController@store']);
$router->put('/books/{book}',  ['uses' => 'BookController@update']);
$router->delete('/books/{book}',  ['uses' => 'BookController@destroy']);
$router->get('/books/{book}',  ['uses' => 'BookController@show']);
