@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <form action="{{Route('room.update',$room->id)}}" method="POST">
            @csrf
            @method('PUT')
        <div class="card-header">
            Rooms <a href="{{Route('room.create')}}">new room</a>
        </div>
        <div class="card-body" >

            <div class="form-group">
                <label>Name Room</label>
            <input type="text" name="name" value="{{$room->name}}"/>
                <label>Cost</label>
                <input type="text" name="cost" value="{{$room->cost}}"/>
                <label>Status</label>
                <select type="text" name="status" value="{{$room->status}}">
                    <option value="0">Available</option>
                    <option value="1">Occupied</option>
                    <option value="2">Others</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="Edit" class="btn btn-secundary" >
            <a href="{{Route('room.index')}}">Return Menu Rooms</a>
        </div>
    </div>
</div>
@endsection
