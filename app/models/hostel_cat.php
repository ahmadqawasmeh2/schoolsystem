<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class hostel_cat extends Model {
    protected $fillable = [
        'id', 'catTypeId','catTitle','catFees','catNotes'
    ];
}
