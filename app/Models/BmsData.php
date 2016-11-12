<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BmsData extends Model
{
    protected $table = 'bms_data';

    public function bms()
    {
        return $this->belongsTo(Bms::class, 'bms_id', 'id');
    }
}
