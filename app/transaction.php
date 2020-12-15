<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $table = 'transactions';
    protected $hidden = [
       'created_at', 'updated_at',
    ];
}
