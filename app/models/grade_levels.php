<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class grade_levels extends Model {
	protected $fillable = [
        'id', 'gradeName','gradeDescription','gradePoints','gradeFrom'
        ,'gradeTo'
    ];
}
