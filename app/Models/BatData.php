<?php

namespace App\Models;

/**
 * App\Models\BatData
 *
 * @property-read \App\Models\Bat $bat
 * @mixin \Eloquent
 * @property integer $id
 * @property integer $bat_id
 * @property float $soc 剩余电量
 * @property float $soh 健康状况
 * @property float $vol 电压
 * @property float $res 电阻
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BatData whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BatData whereBatId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BatData whereSoc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BatData whereSoh($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BatData whereVol($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BatData whereRes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BatData whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BatData whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BatData whereDeletedAt($value)
 */
class BatData extends Base
{
    protected $table = 'bat_data';

    public function bat()
    {
        return $this->belongsTo(Bat::class, 'bat_id', 'id');
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc')->first();
    }
}
