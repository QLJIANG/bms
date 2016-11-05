<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 03/11/2016
 * Time: 10:19 PM
 */

namespace App\Api\Requests\Auth;

use App\Api\Requests\Request;

class RegisterRequest extends Request
{
    public function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'username' => '用户名',
        ];
    }

    //public function custom()
    //{
    //    return [
    //        'username' => [
    //            'required' => '缺少',
    //        ],
    //        'password' => [
    //            'required' => '缺少',
    //        ],
    //    ];
    //}

}
