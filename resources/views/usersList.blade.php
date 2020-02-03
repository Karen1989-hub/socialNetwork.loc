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
              

  <h2>Found people</h2>
             
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
   @foreach($users as $val)
      <tr>
        <td>{{$val->firstName}}</td>
        <td>{{$val->lastName}}</td>
        <td>
        <form action="{{route('guestPage')}}" method="post">
        @csrf
        <input type="hidden" name="userId" value="{{$val->id}}">
        <button type="submit" class="btn btn-primary">Enter</button>
        </form>        
        </td>
      </tr>
   @endforeach
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