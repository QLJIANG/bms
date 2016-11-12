<?php
//Auth::loginUsingId(2);

$api = app('Dingo\Api\Routing\Router');

//$dispatcher = app('Dingo\Api\Dispatcher');

$api->version('v1', function ($api) {

    $api->get('/', function () {
        return ['api.laravel.dev'];
    });

    $api->group(['namespace' => 'App\Api\Controllers'], function ($api) {

        $api->post('auth/login', 'AuthController@login');
        $api->post('auth/register', 'AuthController@register');

        $api->resource('user', 'UserController');

        $api->group(['middleware' => 'jwt.auth'], function ($api) {
            $api->get('auth/me', 'AuthController@getAuthenticatedUser');
        });

        $api->get('bms/index', 'BmsController@index');
        $api->get('bms/show', 'BmsController@show');

        $api->get('bms_data/index', 'BmsDataController@index');
        $api->get('bms_data/show', 'BmsDataController@show');

        $api->get('bat/index', 'BatController@index');
        $api->get('bat/show', 'BatController@show');

        $api->get('bat_data/index', 'BatDataController@index');
        $api->get('bat_data/show', 'BatDataController@show');
    });
});

