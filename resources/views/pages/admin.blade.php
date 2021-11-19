@extends('layouts.app')

@section('content')   
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" style='margin-top:20px; margin-left: 50px; width: 500px;'>Add Event</button>
<!-- MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: 150px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 700px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="card text-left" >
                            <div class="card-body">
                            <form action="addEvent" method="POST">
                                @csrf 
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label for="venue">Venue</label>
                                    <input type="text" class="form-control" name="venue" required>
                                </div>
                                <div class="form-group">
                                    <label for="start_time">Date</label>
                                    <input type="date" class="form-control" name="start_time" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="textarea" class="form-control" name="description" required>
                                </div>
                                <div class="form-group">
                                    <label for="price_VIP">Ticket Price for VIP</label>
                                    <input type="text" class="form-control" name="price_VIP" required>
                                </div>
                                <div class="form-group">
                                    <label for="price_regular">Ticket Price for regular</label>
                                    <input type="text" class="form-control" name="price_regular" required>
                                </div>
                                <div class="form-group">
                                    <label for="attendees">Number of maximum attendees</label>
                                    <input type="text" class="form-control" name="attendees" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"> SAVE </button>
                                </div>
                            
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <table border='1' style="margin-top: 20px;">
        <tr>
            <th>Title</th>
            <th>Venue</th>
            <th>Start Date</th>
            <th>Description</th>
            <th>VIP Price</th>
            <th>Regular Price</th>
            <th>Action</th>

        </tr>
        @foreach ($events as $event)
        <tr>
            <td>{{$event-> title}}</td>
            <td>{{$event-> venue}}</td>
            <td>{{$event-> start_time}}</td>
            <td>{{$event-> description}}</td>
            <td>{{$event-> price_VIP}}</td>
            <td>{{$event-> price_regular}}</td>
            <td style="border: 1px solid black ;">
            <button class="btn btn-danger">
                <a href="/delete/{{$event -> id}}"  style="color: black;">DELETE</a></button>
            <!-- <button class="btn btn-primary">
                <a href="/edit/{{$event -> id}}" style="color: black;">EDIT</a></button> -->
            </td>


        </tr>
        @endforeach

    </table>

</div>


@include('\includes.footer')
@endsection


