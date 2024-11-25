<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';
    protected $fillable = [
        'customer_name',
        'email',
        'phone',
        'number_of_passengers',
        'booking_date',
        'booking_time',
        'choose_bench',
        'price',
    ];
    

    // Booking Model
public function user()
{
    return $this->belongsTo(User::class);
}

// app/Models/Booking.php
public function package()
{
    return $this->belongsTo(Package::class);
}


}