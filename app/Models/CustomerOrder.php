<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    protected $fillable = [
        'user_id',
        'fullname',
        'email',
        'phone',
        'pincode',
        'address',
        'city',
        'state',
        'delivery_type',
        'total_amount',
        'discount_amount',
        'final_amount',
        'payment_method',
        'payment_status',
        'status'
    ];
}
