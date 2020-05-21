<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Availability extends Model
{
    protected $fillable = ['check_in_date','check_out_date'];

    public function bookings()
    {
        return $this->belongsToOne(Booking::class);
    }

    public function checkDates($check_in_date,$check_out_date)
    {
        $check_in_date = '2020-05-18';
        $check_out_date = '2020-05-22';
        $availability = DB::table('bookings',(function($query) {
            $query->SELECT('rooms_id')
                ->FROM('rooms')
                ->LEFTJOIN('bookings','rooms_id', '=', 'booking.room_id')
                ->WHERE('bookings.check_out', '>', '2020-05-22')
                ->WhereNotNull('bookings.check_out');
        }))->get();
        dd($availability);
    }
}
