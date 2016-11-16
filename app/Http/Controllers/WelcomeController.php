<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 15/11/2016
 * Time: 7:49 PM
 */

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function api()
    {
        return ['api is ready'];
    }
}