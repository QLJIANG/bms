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
class BmsDataController extends ApiController
{
    public function index(Request $request)
    {
        $bmsId = $request->get('bms_id');
        //$bms = $this->user()->bms()->where('id', $bmsId);  //这里不能用where，否则$bms->bmsData()会报错
        $bms = $this->user()->bms()->find($bmsId);
        if (!$bms) {
            $this->response()->errorNotFound();
        }

        $bmsData = $bms->bmsData;
        if (!$bmsData) {
            $this->response()->errorNotFound();
        }

        return response()->json($bmsData);
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

        return response()->json($bmsData);
    }

}