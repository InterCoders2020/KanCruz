<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['first_name', 'last_name','email', 'phone','check_in','check_out','guests','room_id','pet', 'breakfast', 'comment'];

    public function getPetAttribute($value)
    {
       if($value == 1)
        {
            return "Yes";
        }

       return "No";
    }

    public function getBreakfastAttribute($value)
    {
       if($value == 1)
        {
            return "Yes";
        }

       return "No";
    }

   /*  public function getCheckInAttribute()
    {
        return date('d/m/Y', strtotime($this->attributes['check_in']));
    }

    public function getCheckOutAttribute()
    {
        return date('d/m/Y', strtotime($this->attributes['check_out']));
    } */

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucwords(strtolower($value));

    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = ucwords(strtolower($value));

    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

      public function room()
    {
        return $this->hasOne(Room::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function rate()
    {
        return $this->hasOne(Rate::class);
    }

    public function availability()
    {
        return $this->hasOne(Availability::class);
    }
}
