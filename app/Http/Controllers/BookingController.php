<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use App\Rate;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::all();
        return view('booking.index', compact('bookings'));
    }

    public function create()
    {
        return view('booking.create');
    }

    public function store(Request $request)
    {

        $booking = Booking::create($request->all());
        $rate = new Rate();
        $rate->booking_id = $booking->id;
        $rate->priceTotalInstance(100,5);
        $rate->save();
        return redirect(route('booking.index'))->with('success', 'The reservation has been added');
    }


    public function show(Booking $booking)
    {
        return view('booking.show', compact('booking'));
    }


    public function edit(Booking $booking)
    {
        return view('booking.edit', compact('booking'));
    }


    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        return redirect(route('booking.index'));
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect(route('booking.index'));
    }
}
