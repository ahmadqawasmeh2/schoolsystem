<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class enquiries extends Model
{
    protected $fillable = [
        'id', 'enq_title', 'enq_desc', 'enq_type', 'enq_source', 'FullName', 'phoneNo', 'email', 'Address', 'enq_date', 'nxt_fup', 'enq_file', 'enq_notes'

    ];
}
