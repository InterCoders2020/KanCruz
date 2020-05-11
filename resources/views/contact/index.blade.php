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
        Contact <a href="{{Route('contact.create')}}">New Contact</a>
        </div>
        <table class="card-body" >
            <thead>
                <tr>
                  <td>Full Name</td>
                  <td>Email</td>
                  <td>Description</td>
                  <td colspan="3">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->description}}</td>
                        <td><a href="{{route('contact.edit', $contact->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('contact.destroy', $contact->id)}}" method="post">
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
