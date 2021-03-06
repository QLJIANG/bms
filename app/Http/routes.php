<?php

$api = app('Dingo\Api\Routing\Router');
//$dispatcher = app('Dingo\Api\Dispatcher');

$api->version('v1', function ($api) {

    $api->get('/', '\App\Http\Controllers\WelcomeController@api');

    $api->group(['namespace' => 'App\Api\Controllers'], function ($api) {

        $api->post('auth/login', 'AuthController@login');
        $api->post('auth/register', 'AuthController@register');
        $api->get('auth/me', 'AuthController@getAuthenticatedUser');

        $api->resource('user', 'UserController');

        $api->get('bms/index', 'BmsController@index');
        $api->get('bms/show', 'BmsController@show');

        $api->get('bms_data/index', 'BmsDataController@index');
        $api->get('bms_data/show', 'BmsDataController@show');

        $api->get('bat/index', 'BatController@index');
        $api->get('bat/show', 'BatController@show');

        $api->get('bat_data/index', 'BatDataController@index');
        $api->get('bat_data/show', 'BatDataController@show');
        $api->get('bat_data/latest', 'BatDataController@latest');

        $api->get('station/index', 'StationController@index');
        $api->get('station/show', 'StationController@show');
    });
});

get('/', 'WelcomeController@index');

