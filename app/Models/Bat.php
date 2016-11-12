<?php

namespace App\Models;

/**
 * App\Models\Bat
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BatData[] $batData
 * @property-read \App\Models\Bms $bms
 * @mixin \Eloquent
 * @property integer $id
 * @property integer $bms_id
 * @property string $factory 厂商
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Bat whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Bat whereBmsId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Bat whereFactory($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Bat whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Bat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Bat whereDeletedAt($value)
 */
class Bat extends Base
{
    protected $table = 'bat';

    public function batData()
    {
        return $this->hasMany(BatData::class, 'bat_id', 'id');
    }

    public function bms()
    {
        return $this->belongsTo(Bms::class, 'bms_id', 'id');
    }
}
