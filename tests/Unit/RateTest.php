<?php

namespace Tests\Unit;
use App\Rate;

use PHPUnit\Framework\TestCase;

class RateTest extends TestCase
{
    public $guestMax = 4;
    public $pet;
    public $roomPrice = 85;
    public $breakfast = 15;
    public $petsprice = 5;
    public $days;
    public $rooms;


    public function test_price_for_nigth()
    {
        $rooms = 2;
        $days = 4;
        $roomPrice = 85;
        $rate = new Rate();
        $resultNigth = $rate->priceForNigth($roomPrice , $days, $rooms);
        $resultNigth = $rooms * $roomPrice * $days;
        $this->assertEquals(680, $resultNigth);
    }


    public function test_price_with_breakfast()
    {
        $guest = 2;
        $breakfast = 15;
        $rate = New Rate();
        $resultBreakfast = $rate->priceWithBreakfast($guest , $breakfast);
        $resultBreakfast = $guest * $breakfast;
        $this->assertEquals(30, $resultBreakfast);
    }

    public function test_price_with_pet()
    {
        $pet = 2;
        $petsprice = 5;
        $rate = New Rate();
        $resultPet = $rate->priceWithPet($petsprice , $pet);
        $resultPet = $petsprice * $pet;
        $this->assertEquals(10, $resultPet);
    }


    public function test_maximum_people_per_room()
    {
        $guestMax = 4;
        $guest = 3;
        $rate = New Rate();
        $resultMaxPeople = $rate->maxPersonsPerRoom($guest , $guestMax);
        $this->assertGreaterThanOrEqual($guest, $guestMax);
    }

    public function test_for_number_of_rooms()
    {
        $rooms= 2;
        $roomPrice= 85;
        $rate = new Rate();
        $resultRoom =$rate->priceForNumberOfRooms($rooms , $roomPrice);
        $resultRoom = $rooms * $roomPrice;
        $this->assertEquals(170 , $resultRoom);
    }

    public function test_price_total_instance()
    {
        $guest = 2;
        $rooms = 2;
        $pet = 1 ;
        $roomPrice = 85;
        $breakfast = 15;
        $petsprice = 5;
        $days = 4;
        $resultBreakfast = $guest * $breakfast;
        $resultNigth = $rooms * $roomPrice * $days;
        $resultPet = $petsprice * $pet;

        $rate = new Rate();
        $resultTotal = $rate->priceTotalInstance($roomPrice , $days , $guest , $breakfast , $petsprice , $pet,  $rooms);
        $resultTotal = $resultNigth + $resultBreakfast  + $resultPet;
        $this->assertEquals(715, $resultTotal);
    }

}

