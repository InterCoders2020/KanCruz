<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['name','cost','status'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function rate()
    {
        return $this->hasOne(Rate::class);
    }
}
