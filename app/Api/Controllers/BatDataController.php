<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/25/16
 * Time: 5:50 PM
 */

namespace App\Api\Controllers;

use App\Api\Requests\BatData\IndexRequest;
use App\Api\Requests\BatData\LatestRequest;
use App\Api\Requests\BatData\ShowRequest;
use App\Models\Bat;
use App\Models\BatData;
use App\Models\Bms;

/**
 * Class LessonController
 * @package App\Api\Controllers
 */
class BatDataController extends ApiController
{
    public function index(IndexRequest $request)
    {
        $batId = $request->bat_id;
        $bat = Bat::findOrFail($batId);
        $this->checkBmsPri($bat->bms);
        $batData = $bat->batData->sortByDesc('created_at')->take($request->cnt);

        return $this->success($batData);
    }

    public function show(ShowRequest $request)
    {
        $batDataId = $request->bat_data_id;
        $batData = BatData::findOrFail($batDataId);
        $this->checkBmsPri($batData->bat->bms);

        return $this->success($batData);
    }

    public function latest(LatestRequest $request)
    {
        $bmsId = $request->bms_id;
        $bats = $this->user()->bms()->findOrFail($bmsId)->bat;
        foreach ($bats as $bat) {
            $batData[] = $bat->batData()->latest();
        }
        return $this->success($batData);
    }

}