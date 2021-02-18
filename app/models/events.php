<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{

    protected $fillable = [
        'id', 'eventTitle', 'eventDescription', 'eventFor', 'enentPlace', 'eventImage', 'fe_active', 'eventDate'

    ];
}
