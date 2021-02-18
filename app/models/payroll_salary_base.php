<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class payroll_salary_base extends Model {

    protected $fillable = [
        'id', 'salary_title','salary_basic',
        'hour_overtime','salary_allowence','salary_deduction','net_salary'
        ,'gross_salary'
    ];
}
