<?php

namespace App\Models;

class Station extends Base
{
    const PI = 3.1415926;
    const R = 6371000;//地球半径，单位米

    protected $table = 'station';

    public function scopeRadius($query, $lat, $lon, $radius)
    {
        list($minLat, $minLng, $maxLat, $maxLng) = $this->getJwd($lat, $lon, $radius);

        return $query->where('latitude', '>=', $minLat)->where('longitude', '>=', $minLng)
            ->where('latitude', '<=', $maxLat)->where('longitude', '<=', $maxLng);
    }

    public function getAround($lat, $lon, $radius)
    {
        $degree = (24901 * 1609) / 360.0;

        $dpmLat = 1 / $degree;
        $radiusLat = $dpmLat * $radius;
        $minLat = $lat - $radiusLat;
        $maxLat = $lat + $radiusLat;

        $mpdLng = $degree * cos($lat * (self::PI / 180));
        $dpmLng = 1 / $mpdLng;
        $radiusLng = $dpmLng * $radius;
        $minLng = $lon - $radiusLng;
        $maxLng = $lon + $radiusLng;

        return [$minLat, $minLng, $maxLat, $maxLng];
    }

    //输入经纬度和x米距离返回以x米距离为半径的经纬度范围，类型为数组
    public function getJwd($lat, $lon, $distance)
    {
        //lat是已知点的纬度，lon是已知点的经度
        //distance就是那个X公里范围,radius是地球半径，一般取平均半径6371km
        $pi = self::PI;
        $radius = self::R;

        //先换算成弧度
        $lat = $lat * $pi / 180;
        $lon = $lon * $pi / 180;

        $radDist = $distance / $radius;  //计算X公里在地球圆周上的弧度

        //计算纬度范围
        $minLat = $lat - $radDist;
        $maxLat = $lat + $radDist;

        //因为纬度在-90度到90度之间，如果超过这个范围，按情况进行赋值
        if ($minLat > -$pi / 2 && $maxLat < $pi / 2) {
            //开始计算经度范围
            $lon_t = asin(sin($radDist) / cos($lat));
            $minLon = $lon - $lon_t;
            //同理，经度的范围在-180度到180度之间
            if ($minLon < -$pi) $minLon += 2 * $pi;
            $maxLon = $lon + $lon_t;
            if ($maxLon > $pi) $maxLon -= 2 * $pi;
        } else {
            $minLat = max($minLat, -$pi / 2);
            $maxLat = min($maxLat, $pi / 2);
            $minLon = -$pi;
            $maxLon = $pi;
        }
        //最后置换成角度进行输出
        $minLat = $minLat * 180 / $pi;
        $maxLat = $maxLat * 180 / $pi;
        $minLon = $minLon * 180 / $pi;
        $maxLon = $maxLon * 180 / $pi;
        $result = [$minLat, $minLon, $maxLat, $maxLon];

        return $result;
    }

}
