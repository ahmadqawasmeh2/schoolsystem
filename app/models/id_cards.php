<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class id_cards extends Model {
    protected $fillable = [
        'id', 'card_name','header_text','main_left','main_right'
        ,'footer_text','card_image','position_margins'
    ];
}
