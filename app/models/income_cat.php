<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class income_cat extends Model {
	protected $fillable = [
        'id', 'cat_title','cat_desc'
    ];
}
