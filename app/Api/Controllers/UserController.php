<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 07/11/2016
 * Time: 10:17 AM
 */

namespace App\Api\Controllers;

use App\Models\User;

class UserController extends ApiController
{
    public function index()
    {
        $users = User::all();

        return $this->success($users);
    }
}