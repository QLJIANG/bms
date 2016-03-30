<?php

namespace App\Http\Requests;

class LessonIndexRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'id' => 'required|min:1',
        ];
    }

    public function attributes()
    {
        return [
            'id' => '课程ID',
        ];
    }

    public function custom()
    {
        return [
            'id' => [
                'required' => '缺少ID',
                'min' => '最小值为1',
            ],
        ];
    }
}
