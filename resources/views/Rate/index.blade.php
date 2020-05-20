@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        Rate
        </div>
        <table class="card-body" >
            <thead>
                <tr>
                  <td>ID Booking</td>
                  <td>Guest</td>
                  <td>Pet</td>
                  <td>Breakfast</td>
                  <td>Rooms</td>
                  <td>Total Price</td>
                  <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($rates as $rate)
                    <tr>
                        <td>{{$rate->booking->id}}</td>
                        <td>{{$rate->booking->guests}}</td>
                        <td>{{$rate->booking->pet}}</td>
                        <td>{{$rate->booking->breakfast}}</td>
                        <td>{{$rate->booking->rooms}}</td>
                        <td>{{$rate->priceTotal}}</td>
                        <td></td>
                        <td></td>
                    <tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
