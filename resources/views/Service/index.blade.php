@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Services List</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('service.create') }}" class="btn btn-info" >Add Service</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Name</th>
               <th>Cost</th>
               <th>Description</th>
               <th></th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($services->count())  
              @foreach($services as $service)  
              <tr>
                <td>{{$service->name}}</td>
                <td>{{$service->cost}}€</td>
                <td>{{$service->description}}</td>
              
                <td>{{$service->edicion}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('ServiceController@edit', $service->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('ServiceController@destroy', $service->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">There is no record !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $services->links() }}
    </div>
  </div>
</section>
 
@endsection