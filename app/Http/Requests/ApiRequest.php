<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/26/16
 * Time: 3:14 PM
 */

namespace App\Http\Requests;


use App\Exceptions\ValidateException;
use Dingo\Api\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpKernel\Exception\HttpException;

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
        if ($this->container['request'] instanceof Request) {
            throw new ValidateException($validator->errors());
        }

        parent::failedValidation($validator);
    }

    protected function failedAuthorization()
    {
        if ($this->container['request'] instanceof Request) {
            throw new HttpException(403);
        }

        parent::failedAuthorization();
    }
}