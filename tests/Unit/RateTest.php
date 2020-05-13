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


    public function test_price_for_nigth()
    {
        $days = 4;
        $roomPrice = 85;
        $rate = new Rate();
        $result = $rate->priceForNigth($roomPrice , $days);
        $result = $roomPrice * $days;
        $this->assertEquals(340, $result);
    }


    public function test_price_with_breakfast()
    {
        $guest = 2;
        $breakfast = 15;
        $rate = New Rate();
        $result = $rate->priceWithBreakfast($guest , $breakfast);
        $result = $guest * $breakfast;
        $this->assertEquals(30, $result);
    }

    public function test_price_with_pet()
    {
        $pet = 2;
        $petsprice = 5;
        $rate = New Rate();
        $result = $rate->priceWithPet($petsprice , $pet);
        $result = $petsprice * $pet;
        $this->assertEquals(10, $result);
    }


    public function test_maximum_people_per_room()
    {
        $guestMax = 4;
        $guest = 3;
        $rate = New Rate();
        $result = $rate->maxPersonsPerRoom($guest , $guestMax);
        $this->assertGreaterThanOrEqual($guest, $guestMax);
    }

    public function test_price_total_instance()
    {
        $guest = 2;
        $pet = 1;
        $roomPrice = 85;
        $breakfast = 15;
        $petsprice = 5;
        $days = 2;
        $rate = new Rate();

        $resultTotal = $rate->prcieTotalInste()


    }
}

