@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
            Bookings
            <a href="{{Route('booking.create')}}" class="btn btn-success"> New  </a>
            </div>
            <div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Check-in</th>
                            <th scope="col">Check-out</th>
                            <th scope="col">Guests</th>
                            <th scope="col">Rooms</th>
                            <th scope="col">Total</th>
                            <th scope="col">Actions</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                        <tr>
                            <td>{{$booking->first_name}}</td>
                            <td>{{$booking->last_name}}</td>
                            <td>{{$booking->check_in}}</td>
                            <td>{{$booking->check_out}}</td>
                            <td>{{$booking->guests}}</td>
                            <td>{{$booking->rooms}}</td>
                            <td>€price</td>

                            <td class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{Route('booking.show',$booking->id)}}" value="Show plates" class="btn btn-primary">Show</a>
                                <a href="{{Route('booking.edit',$booking->id)}}" value="Edit" class="btn btn-warning">Edit</a>
                                <form action="{{route('booking.destroy',$booking->id)}}" method="POST" class="btn-group">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-xs btn-danger">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection
