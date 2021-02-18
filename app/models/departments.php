<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class departments extends Model
{

    protected $fillable = [
        'id', 'depart_title', 'depart_desc'

    ];
}
