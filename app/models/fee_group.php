<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class fee_group extends Model {
	protected $fillable = [
        'id', 'group_title','invoice_prefix','invoice_count','group_description'
    ];
}
