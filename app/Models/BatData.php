<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BatData extends Model
{
    protected $table = 'bat_data';

    public function bat()
    {
        return $this->belongsTo(Bat::class, 'bat_id', 'id');
    }
}
