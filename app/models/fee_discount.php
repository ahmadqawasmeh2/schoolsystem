<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class fee_discount extends Model {
    protected $fillable = [
        'id', 'discount_name','dicount_description','discount_code','discount_type'
        ,'discount_value','discount_status','discount_assignment'
    ];
}
