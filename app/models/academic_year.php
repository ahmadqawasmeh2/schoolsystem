<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class academic_year extends Model
{
    protected $table = 'academic_year';

    protected $fillable = [
        'yearTitle','isDefault',
    ];
}
