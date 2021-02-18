<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class library_issue extends Model {
    protected $fillable = [
        'id', 'issue_id','user_id','book_id','serial_num'
        ,'issue_date','ret_date','is_returned','issue_notes'

    ];
}
