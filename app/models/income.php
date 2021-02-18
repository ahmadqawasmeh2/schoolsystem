<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class income extends Model {
	protected $fillable = [
        'id', 'incomeDate','incomeTitle','incomeAmount','incomeCategory','incomeImage'
        ,'incomeNotes'
    ];
}
