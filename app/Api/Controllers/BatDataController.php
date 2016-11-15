<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/25/16
 * Time: 5:50 PM
 */

namespace App\Api\Controllers;

use App\Api\Requests\BatData\IndexRequest;
use App\Api\Requests\BatData\ShowRequest;
use App\Models\Bat;
use App\Models\BatData;

/**
 * Class LessonController
 * @package App\Api\Controllers
 */
class BatDataController extends ApiController
{
    public function index(IndexRequest $request)
    {
        $batId = $request->get('bat_id');
        $bat = Bat::findOrFail($batId);
        $this->checkBmsPri($bat->bms);

        return $this->success($bat->batData);
    }

    public function show(ShowRequest $request)
    {
        $batDataId = $request->get('bat_data_id');
        $batData = BatData::findOrFail($batDataId);
        $this->checkBmsPri($batData->bat->bms);

        return $this->success($batData);
    }

}