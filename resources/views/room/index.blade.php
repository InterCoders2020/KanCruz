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
        Rooms <a href="{{Route('room.create')}}">New Room</a>
        </div>
        <table class="card-body" >
            <thead>
                <tr>
                  <td>Room Name</td>
                  <td>Cost</td>
                  <td>Status</td>
                  <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td>{{$room->name}}</td>
                        <td>{{$room->cost}}</td>
                        <td>{{$room->status}}</td>
                        <td><a href="{{route('room.edit', $room->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('room.destroy', $room->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    <tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
