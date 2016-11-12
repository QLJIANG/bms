<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/25/16
 * Time: 5:48 PM
 */

namespace App\Api\Controllers;

use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;

class ApiController extends Controller
{
    use Helpers;

    //protected $middleware ='jwt.auth';
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    public function success($data, $msg = 'ok')
    {
        $data = [
            'code' => 0,
            'msg' => $msg,
            'data' => $data
        ];
        return $data;
    }

    public function error($code = 500, $msg = 'error', $data = [])
    {
        $data = [
            'code' => $code,
            'msg' => $msg,
            'data' => $data
        ];
        return $data;
    }

    protected function checkBmsPri($bms)
    {
        $userId = $this->user()->id;
        $bms->user()->findOrFail($userId);
    }

}