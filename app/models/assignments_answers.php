<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class assignments_answers extends Model
{
    protected $fillable = [
        'assignmentId', 'userId', 'fileName', 'userNotes', 'userTime'
    ];
}
