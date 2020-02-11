@extends('layouts.app')

@section('header')
@parent
@endsection
 
@section('userImage')
<!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                
                
                  <img src="images/users/{{$userImg}}" alt="" class="img-responsive profile-photo" />
                
                  <h3>{{$firstName}} {{$lastName}}</h3>
                  <p class="text-muted">Creative Director</p>
                </div>
              </div>
@endsection

@section('navbar')
@parent
@endsection

@section('content')
<div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

<h2>Friend requests</h2>
         <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
   <!-- foreach -->
   @foreach($requests as $val)
      <tr>
        <td>{{$val->from_frstName}}</td>
        <td>{{$val->from_lastName}}</td>  
        <td>
        <form class="acceptanceОfRequest" action="#" method="post">
        @csrf
        <input type="hidden" name="whoseRequest" value="{{$val->from}}">
        <input type="hidden" name="requestFirstName" value='{{$val->from_frstName}}'>
        <input type="hidden" name="requestLastName" value='{{$val->from_lastName}}'>
        <input type="hidden" name="requestImageName" value='{{$val->from_ImageName}}'>
        
        <button type="submit" class="btn btn-primary {{$val->from}}acceptRequest">Accept</button>
        </form>        
        </td>
      </tr>
    @endforeach
   <!-- end foreach -->
    </tbody>
  </table>               


             
            <div class="col-md-2 static">
            
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('footer')
@parent
@endsection