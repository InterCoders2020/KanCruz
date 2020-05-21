<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public $guest;
    public $roomPrice;
    public $breakfast;
    public $petsprice;
    public $pet;
    public $days;
    public $rooms;

    public function priceForNigth( $roomPrice , $days, $rooms)
    {
        return $rooms * $roomPrice * $days;
    }

    public function priceWithBreakfast( $breakfast , $guest)
    {
        return $breakfast * $guest;
    }

    public function priceWithPet( $petsprice , $pet)
    {
        return $petsprice * $pet;
    }

    public function maxPersonsPerRoom( $guest , $guestMax)
    {
        return $guest >= $guestMax;
    }

    public function priceForNumberOfRooms($rooms , $roomPrice)
    {
        return $rooms * $roomPrice;
    }

    public function priceTotalInstance( $roomPrice, $petsprice)
    {
        $nigths = 3; //TODO:Subtituir por metodo de booking (getNitgh)
        $result = $this->booking->rooms * $roomPrice * $nigths;

        if($breakfast = true)
        {
            $result = $result + ($breakfast * $this->booking->guest * $nigths);

        }
        if ($pet = true)
        {
            $result = $result + ($petsprice * $pet * $nigths);
        }

        $this->priceTotal = $result;
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class,);
    }

}

