<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class items_stock extends Model {
    protected $fillable = [
        'id', 'refno','cat_id','item_id','store_id','qty','stock_date','stock_attach'
        ,'stock_notes'

    ];
}
