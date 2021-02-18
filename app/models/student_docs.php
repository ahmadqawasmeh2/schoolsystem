<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class student_docs extends Model {
	protected $fillable = [
        'id', 'user_id','file_title',
        'file_name','file_notes'

    ];
}
