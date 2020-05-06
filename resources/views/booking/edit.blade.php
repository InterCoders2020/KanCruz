@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <form action="{{Route('booking.update',$booking->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-header">
                    <h2>Booking</h2>
                </div>
                <div class="class-body">
                    <div class="col-md-6 col-md-pull-7">
                        <div class="booking-form">
                            <form>
                                <div class="form-group">
                                    <label for="first_name" class="form-label">Name</label>
                                    <input type="text" name='first_name' class="form-control" value="{{$booking->first_name}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="form-label">Lastname</label>
                                    <input type="text" name='last_name' class="form-control" value="{{$booking->last_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">E-mail</label>
                                    <input type="text" name='email' class="form-control" value="{{$booking->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name='phone' class="form-control" value="{{$booking->phone}}">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="check_in"class="form-label">Check-In</label>
                                            <input name="check_in" class="form-control" type="text" value="{{$booking->check_in}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="check_out"class="form-label">Check-Out</label>
                                            <input name="check_out" class="form-control" type="text" value="{{$booking->check_out}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="guests" class="form-label">Guests</label>
                                            <input type="number" id="guests" name="guests" min="1" max="32" class="form-control" value="{{$booking->guests}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="rooms" class="form-label">Rooms</label>
                                            <input type="number" id="rooms" name="rooms" min="1" max="8" class="form-control" value="{{$booking->rooms}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="pet" id="pet" class="form-label">Pet</label>
                                            <select type="text" name="pet" id="pet" class="form-control" value="{{$booking->pet}}">
                                                <option disabled selected> {{$booking->pet}} </option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="breakfast" class="form-label">Breakfast</label>
                                            <select name="breakfast" id="breakfast" class="form-control" value="{{$booking->breakfast}}">
                                                <option disabled selected> {{$booking->breakfast}} </option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{auth::user()->id}}"/>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-btn">
                                            <input type="submit" value="Update" class="btn btn-warning">
                                        </div>
                                    </div>
                                    <form action="{{Route('booking.index')}}">
                                        <div class="col-sm-6">
                                            <div class="form-btn">
                                                <input type="submit" value="Go back" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
