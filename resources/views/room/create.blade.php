@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <form action="{{Route('room.store')}}" method="POST">
            @csrf
        <div class="card-header">
            Rooms <a href="{{Route('room.create')}}">new room</a>
        </div>
        <div class="card-body" >

            <div class="form-group">
                <label>Name Room</label>
                <input type="text" name="name"/>
                <label>Cost</label>
                <input type="text" name="cost"/>
                <label>Status</label>
                <select type="text" name="status">
                    <option value="available">Available</option>
                    <option value="occupied">Occupied</option>
                    <option value="others">Others</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="Create" class="btn btn-secundary" >
            <a href="{{Route('room.index')}}">Return Menu Rooms</a>
        </div>
    </div>
</div>
@endsection
