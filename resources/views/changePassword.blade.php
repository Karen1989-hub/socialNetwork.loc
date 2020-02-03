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
                  <!-- <li><a href="{{route('album')}}">Album</a></li>
                  <li><a href="{{route('friends')}}">Friends</a></li>
                  <li><a href="">Chatroom</a></li> -->
                  <li class="active"><a href="{{route('editProf')}}" class="active">Edit profile</a></li>
                  
                </ul>
                <ul class="follow-me list-inline">                  
                  <!-- <li><button class="btn-primary">Edd Friend</button></li> -->
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
                  <li><a href="{{route('album')}}">Album</a></li>
                  <li><a href="{{route('friends')}}">Friends</a></li>
                  <li><a href="">Chatroom</a></li>
                  <li class="active"><a href="{{route('editProf')}}" class="active">Adit profile</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
@endsection

@section('editProfMenu')
<div id="page-contents">
          <div class="row">
            <div class="col-md-3">
              
              <!--Edit Profile Menu-->
              <ul class="edit-menu">
              	<li><i class="icon ion-ios-information-outline"></i><a href="{{route('editProf')}}">Basic Information</a></li>
              	<li><i class="icon ion-ios-briefcase-outline"></i><a href="{{route('educEndWork')}}">Education and Work</a></li>
              	                
              	<li class="active"><i class="icon ion-ios-locked-outline"></i><a href="{{route('changePassword')}}">Change Password</a></li>
              </ul>
            </div>
            <div class="col-md-7">
@endsection

@section('content')
 <!-- Change Password
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-locked-outline"></i>Change Password</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form action="{{route('saveNewPassword')}}" method="post" name="update-pass" id="education" class="form-inline">
                    @csrf
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password">Old password</label>                        
                        <input id="my-password" class="form-control input-group-lg" type="password" name="oldPassword" title="Enter password" placeholder="Old password"/>
                        @if($errors->has('oldPassword'))
                        <p class="text-danger">{{$errors->first('oldPassword')}}</p>
                        @endif
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>New password</label>
                        <input class="form-control input-group-lg" type="password" name="newPassword" title="Enter password" placeholder="New password"/>
                        @if($errors->has('newPassword'))
                        <p class="text-danger">{{$errors->first('newPassword')}}</p>
                        @endif
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Confirm password</label>
                        <input class="form-control input-group-lg" type="password" name="newPassword_confirmation" title="Enter password" placeholder="Confirm password"/>
                        @if($errors->has('newPassword_confirmation'))
                        <p class="text-danger">{{$errors->first('newPassword_confirmation')}}</p>
                        @endif
                      </div>
                    </div>
                    <p><a href="#">Forgot Password?</a></p>
                    <button type="submit" class="btn btn-primary">Update Password</button>
                  </form>
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
