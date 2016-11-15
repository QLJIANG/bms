<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/25/16
 * Time: 5:50 PM
 */

namespace App\Api\Controllers;

use App\Api\Requests\Bat\IndexRequest;
use App\Api\Requests\Bat\ShowRequest;
use App\Models\Bat;

/**
 * Class LessonController
 * @package App\Api\Controllers
 */
class BatController extends ApiController
{
    public function index(IndexRequest $request)
    {
        $bmsId = $request->get('bms_id');
        $bat = $this->user()->bms()->findOrFail($bmsId)->bat;

        return $this->success($bat);
    }

    public function show(ShowRequest $request)
    {
        $batId = $request->get('bat_id');
        $bat = Bat::findOrFail($batId);
        $this->checkBmsPri($bat->bms);

        return $this->success($bat);
    }

}