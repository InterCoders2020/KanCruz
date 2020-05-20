<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    protected $fillable = ['check_in_date','check_out_date'];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class);
    }
}
