@extends('layouts.app')

@section('content')   
<div class="container">
    <form action="{{route('updateTicket')}}" method="POST" style="width=200px;">
        @csrf 
        <input type="hidden" name="sid" value="{{$Info -> id}}" >
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" value="{{$Info -> title}}" class="form-control" name="title" readonly >
        </div>
        <div class="form-group">
            <label for="venue">Venue</label>
            <input type="text" value="{{$Info -> venue}}" class="form-control" name="venue" readonly>
        </div>
        <div class="form-group">
            <label for="start_time">Date</label>
            <input type="text" value="{{$Info -> start_time}}" class="form-control" name="start_time" readonly>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="textarea" value="{{$Info -> description}}" class="form-control" name="description" readonly >
        </div>
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="firstname" required >
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" name="lastname" required >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" required >
        </div>
        <div class="form-group">
            <label for="price_regular">Ticket type</label>
            <select id="ticket_type" name="ticket_type">
                <option >VIP for {{$Info -> price_VIP}}</option>
                <option >Regular for {{$Info -> price_regular}}</option>
            </select>

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> SAVE </button>
        </div>
    
    </form>
</div>


@include('\includes.footer')
@endsection


