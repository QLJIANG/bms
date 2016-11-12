<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 12/11/2016
 * Time: 11:29 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    protected $hidden = ['deleted_at'];
}