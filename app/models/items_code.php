<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class items_code extends Model {
    protected $fillable = [
        'id', 'item_title','item_desc','item_cat','item_code','item_pn'

    ];
}
