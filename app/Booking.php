<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['first_name', 'last_name','email', 'phone','check_in','check_out','guests','rooms','pet', 'breakfast', 'comment'];

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

    public function getCheckInAttribute() {
        return date('d/m/Y', strtotime($this->attributes['check_in']));
      }

    public function getCheckOutAttribute() {
        return date('d/m/Y', strtotime($this->attributes['check_out']));
      }

    public function setCheckInAttribute($value)
      {
          $this->attributes['check_in'] = date('Y/m/d H:i:s');
      }

    public function setCheckOutAttribute($value)
      {
          $this->attributes['check_out'] = date('Y/m/d H:i:s');
      }



}
