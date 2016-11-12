<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BmsUser
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property integer $bms_id
 * @property integer $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsUser whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsUser whereBmsId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsUser whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\BmsUser whereDeletedAt($value)
 */
class BmsUser extends Model
{
    protected $table = 'bms_user';
}
