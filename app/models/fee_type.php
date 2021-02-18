<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class fee_type extends Model {
	protected $fillable = [
        'id', 'feeTitle','feeCode','feeDescription','feeGroup'
        ,'feeAmount','feeSchType','feeSchDetails'
    ];
}
