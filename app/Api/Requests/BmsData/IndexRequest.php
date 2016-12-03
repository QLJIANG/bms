<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 15/11/2016
 * Time: 2:02 PM
 */

namespace App\Api\Requests\BmsData;

use App\Api\Requests\ApiRequest;

class IndexRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'bms_id' => 'required|min:1',
            'cnt'    => 'min:1',
        ];
    }

    public function init()
    {
        $this->cnt = $this->cnt ?: 100;
    }
}