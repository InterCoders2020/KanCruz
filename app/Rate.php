<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public $guest;
    public $roomPrice;
    public $breakfast;
    public $petsprice;
    public $pets;
    public $days;

    public function priceForNigth( $roomPrice , $days)
    {
        return $roomPrice * $days;
    }

    public function priceWithBreakfast( $breakfast , $guest)
    {
        return $breakfast * $guest;
    }

    public function priceWithPet( $petsprice , $pets)
    {
        return $petsprice * $pets;
    }

    public function maxPersonsPerRoom( $guest , $guestMax)
    {
        return $guest >= $guestMax;
    }

    public function priceTotalInstance( $roomPrice , $days , $guest , $breakfast , $petsprice , $pet)
    {
        $resultNigth = $roomPrice * $days;
        return $resultNigth;
        if($breakfast = true){
            $resultBreakfast = $resultNigth + ($breakfast * $guest);
            return $resultBreakfast;
            if ($pets = True){
                $resultPet = $resultNigth + ($petsprice * $pet);
                return $resultPet;
                if ($breakfast = true and $pet = true){
                    $result = $resultNigth + ($breakfast * $guest) + ($petsprice * $pets);
                    return $result;
                }
            }
        }

    }

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function service()
    {
        return $this->hasOne(Service::class);
    }
}
