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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/', 'Controller@olaMundo');

$router->post("transferir", "TransferenciaController@transferir");

$router->group(['prefix' => 'api'], function () use ($router) {

    // compradores
    $router->get('buyers', [ 'uses' => 'BuyerController@showAllBuyers']);

    $router->get('buyers/{id}', [ 'uses' => 'BuyerController@showOneBuyer']);

    $router->post('buyers', [ 'uses' => 'BuyerController@create']);

    $router->delete('buyers/{id}', [ 'uses' => 'BuyerController@delete']);

    $router->put('buyers/{id}', [ 'uses' => 'BuyerController@update']);

    // vendedores
    $router->get('sellers', [ 'uses' => 'SellerController@showAllSellers']);

    $router->get('sellers/{id}', [ 'uses' => 'SellerController@showOneSeller']);

    $router->post('sellers', [ 'uses' => 'SellerController@create']);

    $router->delete('sellers/{id}', [ 'uses' => 'SellerController@delete']);

    $router->put('sellers/{id}', [ 'uses' => 'SellerController@update']);

    // transacoes

    $router->get('transactions', [ 'uses' => 'TransactionController@showAllTransactions']);

    $router->get('transactions/{id}', [ 'uses' => 'TransactionController@showOneTransaction']);

    $router->post('transactions', [ 'uses' => 'TransactionController@create']);

    // $router->delete('transactions/{id}', [ 'uses' => 'TransactionController@delete']);

    // $router->put('transactions/{id}', [ 'uses' => 'TransactionController@update']);

});
