@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <form action="{{Route('contact.update',$contact->id)}}" method="POST">
            @csrf
            @method('PUT')
        <div class="card-header">
            Coantact <a href="{{Route('contact.create')}}">New Contact</a>
        </div>
        <div class="card-body" >

            <div class="form-group">
                <label>Full Name</label>
            <input type="text" name="name" value="{{$contact->name}}"/>
                <label>Email</label>
                <input type="text" name="email" value="{{$contact->cost}}"/>
                <label>Description</label>
                <input type="text" name="description" value="{{$contact->cost}}"/>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="Edit" class="btn btn-secundary" >
            <a href="{{Route('contact.index')}}">Return Menu Contact</a>
        </div>
    </div>
</div>
@endsection
