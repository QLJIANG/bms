<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 15/11/2016
 * Time: 2:02 PM
 */

namespace App\Api\Requests\Bat;

use App\Api\Requests\ApiRequest;

class IndexRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'bms_id' => 'required|min:1',
        ];
    }
}