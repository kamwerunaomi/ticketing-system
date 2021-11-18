@extends('layouts.app')

@section('content')   
<div class="container">
    <form action="{{route('update')}}" method="POST">
        @csrf 
        <input type="hidden" name="sid" value="{{$Info -> id}}" >
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" value="{{$Info -> title}}" class="form-control" name="title" >
        </div>
        <div class="form-group">
            <label for="venue">Venue</label>
            <input type="text" value="{{$Info -> venue}}" class="form-control" name="venue" >
        </div>
        <div class="form-group">
            <label for="start_time">Date</label>
            <input type="date" value="{{$Info -> start_time}}" class="form-control" name="start_time" >
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="textarea" value="{{$Info -> description}}" class="form-control" name="description" >
        </div>
        <div class="form-group">
            <label for="price_VIP">Ticket Price for VIP</label>
            <input type="text" value="{{$Info -> price_VIP}}" class="form-control" name="price_VIP" >
        </div>
        <div class="form-group">
            <label for="price_regular">Ticket Price for regular</label>
            <input type="text" value="{{$Info -> price_regular}}" class="form-control" name="price_regular" >
        </div>
        <div class="form-group">
            <label for="attendees">Number of maximum attendees</label>
            <input type="text" value="{{$Info -> attendees}}" class="form-control" name="attendees" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> SAVE </button>
        </div>
    
    </form>
</div>


@include('\includes.footer')
@endsection


