<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/25/16
 * Time: 5:50 PM
 */

namespace App\Api\Controllers;

use App\Api\Requests\Bms\ShowRequest;
use App\Models\Bms;
/**
 * Class BmsController
 * @package App\Api\Controllers
 */
class BmsController extends ApiController
{
    public function index()
    {
        $bms = $this->user()->bms;

        return $this->success($bms);
    }

    public function show(ShowRequest $request)
    {
        $bmsId = $request->bms_id;
        $bms = Bms::findOrFail($bmsId);
        $this->checkBmsPri($bms);

        return $this->success($bms);
    }

}