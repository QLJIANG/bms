<?php

namespace App\Models;

/**
 * App\Models\Bms
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BmsData[] $bmsData
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Bat[] $bat
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $user
 * @mixin \Eloquent
 * @property integer $id
 * @property string $mac MAC地址
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Bms whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Bms whereMac($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Bms whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Bms whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Bms whereDeletedAt($value)
 */
class Bms extends Base
{
    protected $table = 'bms';

    public function bmsData()
    {
        return $this->hasMany(BmsData::class, 'bms_id', 'id');
    }

    public function bat()
    {
        return $this->hasMany(Bat::class, 'bms_id', 'id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'bms_user', 'bms_id', 'user_id');
    }

    public function batData()
    {
        return $this->hasManyThrough(BatData::class, Bat::class, 'bms_id', 'bat_id');
    }
}
