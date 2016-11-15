<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/26/16
 * Time: 3:14 PM
 */

namespace App\Api\Requests;

use App\Exceptions\ValidateException;
//use Dingo\Api\Http\Request;
use Dingo\Api\Http\FormRequest;
use Illuminate\Auth\Access\UnauthorizedException;
use Illuminate\Contracts\Validation\Validator;

class ApiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new ValidateException($validator->errors());
    }

    protected function failedAuthorization()
    {
        throw new UnauthorizedException('权限错误', 403);
    }
}