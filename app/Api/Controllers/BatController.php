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
class BatController extends ApiController
{
    public function index()
    {
        $bms = $this->user()->bms;

        return response()->json($bms);
    }

    public function show($bmsId)
    {
        $bms = $this->user()->bms()->find($bmsId);

        if (!$bms) {
            $this->response()->errorNotFound();
        }

        return response()->json($bms);
    }

}