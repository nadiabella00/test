<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'route',
        'departure_time',
        'arrival_time',
        'price',
        'date',
        'status',
        'class',
    ];
    
    public function services()
    {
        return $this->belongsToMany(Service::class, 'package_service', 'package_id', 'service_id');
    }

    // app/Models/Package.php
public function bookings()
{
    return $this->hasMany(Booking::class);
}

}