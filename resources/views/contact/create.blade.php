@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <form action="{{Route('contact.store')}}" method="POST">
            @csrf
        <div class="card-header">
            Contact <a href="{{Route('contact.create')}}">New Contact</a>
        </div>
        <div class="card-body" >

            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name"/>
                <label>Email</label>
                <input type="text" name="email"/>
                <label>Description</label>
                <input type="textera" name="description"/>


            </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="Create" class="btn btn-secundary" >
            <a href="{{Route('contact.index')}}">Return Menu Contact</a>
        </div>
    </div>
</div>
@endsection
