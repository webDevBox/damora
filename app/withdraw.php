<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class withdraw extends Model
{
    protected $table = 'withdraws';
    protected $hidden = [
       'created_at', 'updated_at',
    ];
}
