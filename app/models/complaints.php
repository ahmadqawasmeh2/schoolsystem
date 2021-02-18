<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class complaints extends Model
{
    protected $fillable = [
        'id', 'comp_title', 'comp_desc', 'comp_type', 'comp_source', 'FullName', 'phoneNo', 'email', 'Address', 'enq_date', 'nxt_fup', 'enq_file', 'enq_notes'
    ];
}
