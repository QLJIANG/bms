<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/25/16
 * Time: 5:50 PM
 */

namespace App\Api\Controllers;

use App\Api\Requests\Station\IndexRequest;
use App\Api\Requests\Station\ShowRequest;
use App\Models\Station;

/**
 * Class StationController
 * @package App\Api\Controllers
 */
class StationController extends ApiController
{
    /**
     * 查询给定位置半径范围内的充电桩列表，由近及远排序
     * @return array
     */
    public function index(IndexRequest $request)
    {
        $request->init();
        $station = Station::radius($request->lat, $request->lon, $request->radius)->get();

        return $this->success($station);
    }

    public function show(ShowRequest $request)
    {
        $stationId = $request->get('station_id');
        $station = Station::findOrFail($stationId);

        return $this->success($station);
    }

}