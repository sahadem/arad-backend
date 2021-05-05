<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'v1'], function () use ($router) {

        // users routes
        $router->post('login', ['middleware' => 'isAdmin', 'uses' => 'UserController@login']);
        $router->post('logout', ['middleware' => 'auth', 'uses' => 'UserController@loguot']);


        // user panel routes
        $router->get('getPanelItems', ['middleware' => ['isAdmin' , 'auth'], 'uses' => 'UserController@loguot']);


        // upload route
        $router->post('upload', ['middleware' => ['isAdmin' , 'auth'], 'uses' => 'UploadController@upload']);


    });
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
