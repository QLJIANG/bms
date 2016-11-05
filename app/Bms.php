<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bms extends Model
{
    protected $table = 'bms';

    public function bmsData()
    {
        return $this->hasMany(BmsData::class, 'bms_id', 'id');
    }
}
