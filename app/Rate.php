<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public $guestMax;
    public $roomPrice;
    public $breakfast;
    public $pet;
    public $days;

    public function priceForNigth($roomPrice , $days)
    {
        $result = $roomPrice * $days;
        return $result;
        if($result );

    }

    public function priceWithBreakfast($breakfast , $guest)
    {
        return $breakfast * $guest;
    }

    public function priceWithPet($petsprice , $pets)
    {
        return $petsprice * $pets;
    }

    public function maxPersonsPerRoom($guest , $guestMax)
    {
        return $guest >= $guestMax;
    }

    // public function priceTotalInstance()
    {
        $resultTotal = $resultfornigth + $resultForBraefsts +$resultForPet;
    }

    public function getPriceTotalInstance()
    {
        return $resultTotal;
    }
}
