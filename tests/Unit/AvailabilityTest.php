<?php

namespace Tests\Unit;
use App\Availability;

use PHPUnit\Framework\TestCase;

class AvailabilityTest extends TestCase
{
    public $check_in_date;
    public $check_out_date;


    public function test_is_specific_room_available_for_a_specific_date()
    {
        $check_in_date = '2020-05-18';
        $check_out_date = '2020-05-22';
        $availability = new Availability();
        $result = $availability->dates($check_in_date, $check_out_date);
        $result = $this->bookings->check_out >= '2020-05-22';
        $this->assertSame($check_out_date, $result);
    }
}

