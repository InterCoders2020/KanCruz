@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{Route('booking.index')}}">
                <div class="card-header">
                    <table class="table">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <h2>Booking ID: {{$booking->id}}</h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <h2>Total: € price</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="class-body">
                            <div class="col-md-6 col-md-pull-7">
                                <div class="booking-form">

                                        <div class="form-group">
                                            <h5 class="form-label">Name</h5>
                                            <p class="form-control"> {{$booking->first_name}}</p>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="form-label">Surname</h5>
                                            <p class="form-control"> {{$booking->last_name}}</p>
                                        </div>

                                        <div class="form-group">
                                            <h5 class="form-label">E-mail address</h5>
                                            <p class="form-control"> {{$booking->email}}</p>
                                        </div>

                                        <div class="form-group">
                                            <h5 class="form-label">Phone Number</h5>
                                            <p class="form-control"> {{$booking->phone}}</p>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <h5 class="form-label">Check-In</h5>
                                                    <p class="form-control"> {{$booking->check_in}}</p>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <h5 class="form-label">Check-Out</h5>
                                                    <p class="form-control"> {{$booking->check_out}}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <h5 class="form-label">Guests</h5>
                                                    <p class="form-control"> {{$booking->guests}}</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <h5 class="form-label">Rooms</h5>
                                                    <p class="form-control"> {{$booking->rooms}}</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <h5 class="form-label">Pet</h5>
                                                    <p class="form-control"> {{$booking->pet}}</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <h5 class="form-label">Breakfast</h5>
                                                    <p class="form-control"> {{$booking->breakfast}}</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-btn">
                                            <input type="submit" value="Go back" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </table>
                </div>
            </form>
        </div>
    </div>
    @endsection
