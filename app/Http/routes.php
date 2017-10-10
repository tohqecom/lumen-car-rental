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

$app->get('/', function () use ($app) {
    return 'Lumen Car Rental<br>'.$app->version();
});

/**
 * api v1 routes group
 */
$app->group(['prefix'=>'api/v1'],function() use($app){
    /**
     * CRUD client routes
     */
    $app->get('client','ClientController@index');
    $app->get('client/{id}','ClientController@get');
    $app->post('client','ClientController@create');
    $app->put('client/{id}','ClientController@update');
    $app->delete('client/{id}','ClientController@delete');


    /**
     * car rented and free
     */
    $app->get('car/rented','CarController@rented');
    $app->get('car/free','CarController@free');

    /**
     * CRUD car
     */
    $app->get('car','CarController@index');
    $app->get('car/{id}','CarController@get');
    $app->post('car','CarController@create');
    $app->put('car/{id}','CarController@update');
    $app->delete('car/{id}','CarController@delete');

    /**
     * CRUD rental
     */
    $app->get('rental','RentalController@index');
    $app->get('rental/{id}','RentalController@get');
    $app->post('rental','RentalController@create');
    $app->put('rental/{id}','RentalController@update');
    $app->delete('rental/{id}','RentalController@delete');

    $app->get('histories/client/{id}','ClientController@histories');
    $app->get('histories/car/{id}','CarController@histories');
});