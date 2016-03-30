<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/26/16
 * Time: 11:57 PM
 */

namespace App\Http\Requests;


class LessonStoreRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'title' => 'required|string|min:3|max:50',
            'body' => 'required'
        ];
    }
}