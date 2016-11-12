<?php

namespace App\Models;

/**
 * App\Models\BmsData
 *
 * @property-read \App\Models\Bms $bms
 * @mixin \Eloquent
 * @property integer $id
 * @property integer $bms_id
 * @property float $soc 剩余电量
 * @property float $soh 健康状况
 * @property float $vol 电压
 * @property float $res 电阻
 * @property float $longitude 维度
 * @property float $latitude 经度
 * @property float $altitude 海拔
 * @property float $speed 速度
 * @property integer $locate_mode 定位模式
 * @property integer $satellite 卫星数
 * @property float $temp 温度
 * @property float $current 工作电流
 * @property integer $charge 充放电状态，1充电，2放电
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereBmsId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereSoc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereSoh($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereVol($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereRes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereAltitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereSpeed($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereLocateMode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereSatellite($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereTemp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereCurrent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereCharge($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsData whereDeletedAt($value)
 */
class BmsData extends Base
{
    protected $table = 'bms_data';

    public function bms()
    {
        return $this->belongsTo(Bms::class, 'bms_id', 'id');
    }
}
