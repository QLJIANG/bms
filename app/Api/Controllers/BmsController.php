<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/25/16
 * Time: 5:50 PM
 */

namespace App\Api\Controllers;

use App\Models\Bms;
use Dingo\Api\Exception\ValidationHttpException;
use Illuminate\Http\Request;

/**
 * Class LessonController
 * @package App\Api\Controllers
 * @resource("Lessons", uri="/lessons")
 */
class BmsController extends ApiController
{
    public function index()
    {
        $bms = $this->user()->bms;

        return $this->success($bms);
    }

    public function show(Request $request)
    {
        $bmsId = $request->get('bms_id');
        $bms = Bms::findOrFail($bmsId);
        $this->checkBmsPri($bms);

        return $this->success($bms);
    }

}