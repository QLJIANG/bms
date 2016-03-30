<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/26/16
 * Time: 2:53 PM
 */

namespace App\Exceptions;


use Dingo\Api\Exception\ResourceException;

class ValidateException extends ResourceException
{
    public function __construct($errors = [], $message = '参数验证失败')
    {
        parent::__construct($message, $errors);
    }
}