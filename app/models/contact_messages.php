<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact_messages extends Model
{
    protected $fillable = [
        'id', 'mail_subject', 'firstName', 'lastName', 'email', 'message', 'message_time'

    ];
}
