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
        return $this->hasMany(Bat::class, 'bms_id', 'id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'bms_user', 'bms_id', 'user_id');
    }
}
