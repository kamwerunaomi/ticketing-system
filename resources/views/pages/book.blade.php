@extends('layouts.app')

@section('content')   

<div class="container">
  <div class="row">
    <div class="col">
      <table id="reviewers" class="col table table-striped table-bordered" style="width: 700px;margin-top: 20px; margin-left: 140px;">
        <thead>
          <tr>
            <th colspan="7" style="text-align: center; font-size: 24px; background-color: #ececf4;">EVENTS</th>
          </tr>
          <tr>
            <th>Title</th>
            <th>Venue</th>
            <th>Start Date</th>
            <th>Description</th>
            <th>VIP Price</th>
            <th>Regular Price</th>
            <th>Action</th>
    </tr>
        </thead>
        
        <tbody>
        @foreach ($events as $event)
    <tr>
        <td>{{$event-> title}}</td>
        <td>{{$event-> venue}}</td>
        <td>{{$event-> start_time}}</td>
        <td>{{$event-> description}}</td>
        <td>{{$event-> price_VIP}}</td>
        <td>{{$event-> price_regular}}</td>
        <td >
        <button class="btn btn-primary">
            <a href="/bookEvent/{{$event -> id}}" style="color: black;">BOOK</a></button>
        </td>
    </tr>
    @endforeach
        </tbody>          
      </table>    
    </div>    
  </div>    


</div>
@include('\includes.footer')
@endsection


