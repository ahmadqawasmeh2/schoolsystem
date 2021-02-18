<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class payments extends Model {
    protected $fillable = [
        'paymentTitle','paymentDescription', 'paymentStudent',
         'paymentRows', 'paymentAmount',
         'paymentDiscount', 'paymentDiscounted',
         'paidAmount', 'paymentStatus',
         'paymentDate', 'dueDate',
         'dueNotified', 'paymentUniqid',
         'paymentSuccessDetails', 'paidMethod',
         'paidTime', 'discount_id',
    ];
}
