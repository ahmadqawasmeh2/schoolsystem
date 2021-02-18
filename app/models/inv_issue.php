<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class inv_issue extends Model {
    protected $fillable = [
        'id', 'refno','item_cat','item_title','qty','issue_tu'
        ,'ret_date','is_returned','attachment','issue_notes'

    ];
}
