<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['paket_id', 'nama', 'telepon', 'email', 'resi'];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
