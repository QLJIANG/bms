<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 15/11/2016
 * Time: 2:02 PM
 */

namespace App\Api\Requests\Station;

use App\Api\Requests\ApiRequest;

class IndexRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'lon' => 'required|numeric|min:-180|max:180',
            'lat' => 'required|numeric|min:-90|max:90',
            'radius' => 'numeric',
        ];
    }

    public function init()
    {
        $this->radius = $this->radius ?: 1000;
    }
}