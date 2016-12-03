<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/25/16
 * Time: 5:50 PM
 */

namespace App\Api\Controllers;

use App\Api\Requests\BmsData\IndexRequest;
use App\Api\Requests\BmsData\ShowRequest;
use App\Models\BmsData;
use Dingo\Api\Http\Request;

/**
 * Class LessonController
 * @package App\Api\Controllers
 * @resource("Lessons", uri="/lessons")
 */
class BmsDataController extends ApiController
{
    public function index(IndexRequest $request)
    {
        $request->init();
        $bmsId = $request->bms_id;
        $cnt = $request->cnt;
        $bmsData = $this->user()->bms()->findOrFail($bmsId)->bmsData->sortByDesc('created_at')->take($cnt);

        return $this->success($bmsData);
    }

    public function show(ShowRequest $request)
    {
        $bmsDataId = $request->bms_data_id;
        $bmsData = BmsData::findOrFail($bmsDataId);
        $this->checkBmsPri($bmsData->bms);

        return $this->success($bmsData);
    }

}