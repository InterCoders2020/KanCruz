<?php

use Illuminate\Database\Seeder;
use App\Booking;

class BookingSeeder extends Seeder
{
     public function run()
    {
        factory(Booking::class,3)->create();
    }
}
