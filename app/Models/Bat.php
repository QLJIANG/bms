<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bat extends Model
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
