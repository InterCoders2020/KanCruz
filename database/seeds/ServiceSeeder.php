<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceSeeder extends Seeder
{

    public function run()
    {
        factory(Service::class,2)->create();
    }
}
