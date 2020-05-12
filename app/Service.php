<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'cost', 'description'];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class);
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class);
    }

    public function rate()
    {
        return $this->hasOne(Rate::class);
    }
}
