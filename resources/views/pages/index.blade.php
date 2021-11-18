@extends('layouts.app')

@section('content')   
    <form method="POST" class="post-form" action="/">  

    <div class="container">
      <div class="row">
        <div class="col">
          <table id="reviewers" class="col table table-striped table-bordered" style="width: 700px;margin-top: 20px; margin-left: 140px;">
            <thead>
              <tr>
                <th colspan="3" style="text-align: center; font-size: 24px; background-color: #ececf4;">YOUR TICKETS</th>
              </tr>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Status</th>
                    
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>Mark Smith</td>
                    <td>HR</td>
                    <td><button type="button" class="btn btn-warning">Remove</button></td>
                    
                </tr>
                <tr>
                    <td>Hunger Mystery</td>
                    <td>Finance</td>
                    <td><button type="button" class="btn btn-warning">Remove</button></td>
                </tr>
                <tr>
                  <td>Angela Bandy</td>
                  <td>Finance</td>
                  <td><button type="button" class="btn btn-warning">Remove</button></td>
              </tr>
                <tr>
                  <td>Lynne Njoki</td>
                  <td>IT</td>
                  <td><button type="button" class="btn btn-warning">Remove</button></td>
                </tr>
            </tbody>
           
          </table>
    
        </div>
        
    
      </div>
    
    </div>
    </form>
@include('\includes.footer')
@endsection


