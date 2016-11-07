<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bms extends Model
{
    protected $table = 'bms';

    public function bmsData()
    {
        return $this->hasMany(BmsData::class, 'bms_id', 'id');
    }

    public function bat()
    {
        return $this->hasMany(BmsBat::class, 'bms_id', 'id');
    }
}
