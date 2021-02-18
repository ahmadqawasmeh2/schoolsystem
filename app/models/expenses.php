<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class expenses extends Model {
    protected $fillable = [
        'id', 'expenseDate','expenseTitle','expenseAmount','expenseCategory'
        ,'expenseImage','expenseNotes'
    ];
}
