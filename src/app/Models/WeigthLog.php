<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeigthLog extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'user_id' => 'required',
        'date' => 'required',
        'weight' => 'required',
    );
}
