<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/25/16
 * Time: 5:50 PM
 */

namespace App\Api\Controllers;

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
    public function index(Request $request)
    {
        $bmsId = $request->get('bms_id');
        $bmsData = $this->user()->bms()->findOrFail($bmsId)->bmsData;

        return $this->success($bmsData);
    }

    public function show(ShowRequest $request)
    {
        $bmsDataId = $request->get('bms_data_id');
        $bmsData = BmsData::findOrFail($bmsDataId);
        $this->checkBmsPri($bmsData->bms);

        return $this->success($bmsData);
    }

}