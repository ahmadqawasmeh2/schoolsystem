<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class certificates extends Model
{

    protected $fillable = [
        'id', 'certificate_name', 'header_left', 'header_right', 'header_middle	', 'main_title', 'main_content',
        'footer_left', 'footer_right', 'footer_middle', 'certificate_image', 'position_margins',

    ];
}
