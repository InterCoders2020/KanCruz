<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['booking_number','name','email','description'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
