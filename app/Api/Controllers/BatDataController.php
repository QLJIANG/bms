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
use App\Models\BatData;
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
        $batId = $request->get('bat_id');
        $bat = Bat::findOrFail($batId);
        $this->checkBmsPri($bat->bms);

        return $this->success($bat->batData);
    }

    public function show(Request $request)
    {
        $batDataId = $request->get('bat_data_id');
        $batData = BatData::findOrFail($batDataId);
        $this->checkBmsPri($batData->bat->bms);

        return $this->success($batData);
    }

}