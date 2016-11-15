<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 15/11/2016
 * Time: 11:28 AM
 */

namespace App\Api\Requests\Bms;

use App\Api\Requests\ApiRequest;

class ShowRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'bms_id' => 'required|min:1',
        ];
    }
}