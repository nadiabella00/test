<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resi extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'phone',
        'address',
        'postal_code',
        'car_type',
        'booking_date',
        'booking_time',
        'service_package',
        'total_price',
        'status',
        'additional_info',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}
}