<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class fee_allocation extends Model {
    protected $table = 'fee_allocation';
    protected $fillable = [
        'id', 'feeTitle','feeGroup','feeType','feeTypeNextTS'
        ,'feeFor','feeForInfo'
    ];
}
