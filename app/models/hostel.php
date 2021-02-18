<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class hostel extends Model {
    protected $fillable = [
        'id', 'hostelTitle','hostelType','hostelAddress','hostelManager'
        ,'managerPhoto','managerContact','hostelNotes'
    ];
}
