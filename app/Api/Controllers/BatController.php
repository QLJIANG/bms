<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/25/16
 * Time: 5:50 PM
 */

namespace App\Api\Controllers;

use App\Api\Transformers\LessonTransformer;
use App\Http\Requests\LessonIndexRequest;
use App\Http\Requests\LessonStoreRequest;
use App\Lesson;
use App\Models\Bat;
use Dingo\Api\Exception\ValidationHttpException;
use Illuminate\Http\Request;

/**
 * Class LessonController
 * @package App\Api\Controllers
 * @resource("Lessons", uri="/lessons")
 */
class BatController extends ApiController
{
    public function index(Request $request)
    {
        $bmsId = $request->get('bms_id');
        $bat = $this->user()->bms()->findOrFail($bmsId)->bat;

        return $this->success($bat);
    }

    public function show(Request $request)
    {
        $batId = $request->get('bat_id');
        $bat = Bat::findOrFail($batId);
        $this->checkBmsPri($bat->bms);

        return $this->success($bat);
    }

}