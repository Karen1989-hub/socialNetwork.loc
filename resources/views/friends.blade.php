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
<div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="{{route('home')}}">Timeline</a></li>
                  <li><a href="{{route('about')}}">About</a></li>
                  <!-- <li><a href="{{route('album')}}">Album</a></li> -->
                  <li><a href="{{route('friendRequest')}}">Friend request</a></li>
                  <li><a href="{{route('friends')}}" class="active">Friends</a></li>
                  <li><a href="">Chatroom</a></li>
                  <li><a href="{{route('editProf')}}">Edit profile</a></li>
                  
                </ul>
                <ul class="follow-me list-inline">                  
                  <li><button class="btn-primary">Add Friend</button></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/users/{{$userImg}}" alt="" class="img-responsive profile-photo" />
              <h4>Sarah Cruiz</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="{{route('home')}}">Timeline</a></li>
                  <li><a href="{{route('about')}}">About</a></li>
                  <!-- <li><a href="{{route('album')}}">Album</a></li> -->
                  <li><a href="{{route('friendRequest')}}">Friend request</a></li>
                  <li><a href="{{route('friends')}}" class="active">Friends</a></li>
                  <li><a href="">Chatroom</a></li>
                  <li><a href="{{route('editProf')}}">Adit profile</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
@endsection

@section('content')

        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- Friend List
              ================================================= -->
              @foreach($friends1 as $val)
              <div class="friend-list">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/1.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/<?php 
                        if($val->friend2_imageName == null){
                            echo "generic-user1.jpg";
                        } else {
                          echo $val->friend2_imageName;
                        }
                        ?>" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">{{$val->friend2_firstName}} {{$val->friend2_lastName}}</a></h5>
                        
                        </div>
                      </div>
                    </div>
                  </div>
              @endforeach

              @foreach($friends2 as $val)
              <div class="friend-list">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/1.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/<?php 
                        if($val->friend1_imageName == null){
                            echo "generic-user1.jpg";
                        } else {
                          echo $val->friend1_imageName;
                        }
                        ?>" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">{{$val->friend1_firstName}} {{$val->friend1_lastName}}</a></h5>
                        
                        </div>
                      </div>
                    </div>
                  </div>
              @endforeach
                  

                </div>
              </div>
            </div>
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