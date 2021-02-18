<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class designations extends Model {
	protected $fillable = [
        'id', 'desig_title','desig_desc'

    ];
}
