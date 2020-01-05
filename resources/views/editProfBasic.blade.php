@extends('layouts.editProf')

@section('header')
@parent
@endsection

@section('userImage')
<!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                 @if($gender=="male")
                  <img src="images/users/generic-user1.jpg" alt="" class="img-responsive profile-photo" />
                @elseif($gender=="female") 
                  <img src="images/users/generic-user-female.png" alt="" class="img-responsive profile-photo" />
                @endif
                  <h3>{{$firstName}} {{$lastName}}</h3>
                  <p class="text-muted">Creative Director</p>
                </div>
              </div>
@endsection

@section('navbar')
@parent
@endsection

@section('editProfMenu')
@parent
@endsection

@section('content')
@parent
@endsection

@section('footer')
@parent
@endsection
