<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name','email','description'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
