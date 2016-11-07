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
use Dingo\Api\Exception\ValidationHttpException;
use Illuminate\Http\Request;

/**
 * Class LessonController
 * @package App\Api\Controllers
 * @resource("Lessons", uri="/lessons")
 */
class BatDataController extends ApiController
{
    public function index(Request $request)
    {
        $bmsId = $request->get('bms_id');
        $bms = $this->user()->bms()->find($bmsId);
        if (!$bms) {
            $this->response()->errorNotFound();
        }

        $bmsData = $bms->bmsData;
        if (!$bmsData) {
            $this->response()->errorNotFound();
        }

        return $this->success($bmsData);
    }

    public function show(Request $request)
    {
        $bmsId = $request->get('bms_id');
        $bmsDataId = $request->get('bms_data_id');

        $bms = $this->user()->bms()->find($bmsId);
        if (!$bms) {
            $this->response()->errorNotFound();
        }

        $bmsData = $bms->bmsData()->find($bmsDataId);
        if (!$bmsData) {
            $this->response()->errorNotFound();
        }

        return $this->success($bmsData);
    }

}