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
                  <li><a href="{{route('album')}}">Album</a></li>
                  <li><a href="{{route('friends')}}">Friends</a></li>
                  <li><a href="">Chatroom</a></li>
                  <li class="active"><a href="{{route('editProf')}}" class="active">Edit profile</a></li>
                  
                </ul>
                <ul class="follow-me list-inline">                  
                  <li><button class="btn-primary">Edd Friend</button></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
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
              	<li class="active"><i class="icon ion-ios-briefcase-outline"></i><a href="{{route('educEndWork')}}">Education and Work</a></li>
              	<li><i class="icon ion-ios-heart-outline"></i><a href="{{route('myInterest')}}">My Interests</a></li>
                
              	<li><i class="icon ion-ios-locked-outline"></i><a href="{{route('changePassword')}}">Change Password</a></li>
              </ul>
            </div>
            <div class="col-md-7">
@endsection

@section('content')
  <!-- Edit Work and Education
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-book-outline"></i>My education</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form method="post" action="{{route('saveEducat')}}" name="education" id="education" class="form-inline">
                    @csrf
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="school">My university</label>
                        <input id="school" class="form-control input-group-lg" type="text" name="university" title="Enter university" placeholder="
                        <?php
                        if($errors->has('university')){
                        echo $errors->first('university');
                    } else {
                      echo 'My university';
                    };
                         ?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="date-from">From</label>
                        <input id="date-from" class="form-control input-group-lg" type="text" name="from" title="Enter a Date" placeholder="from" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="date-to" class="">To</label>
                        <input id="date-to" class="form-control input-group-lg" type="text" name="to" title="Enter a Date" placeholder="to" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="edu-description">Description</label>
                        <textarea id="edu-description" name="description" class="form-control" placeholder="Some texts about my education" rows="4" cols="400"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="graduate">Graduated?:-</label>
                        <input id="graduate" type="checkbox" name="graduate" value="graduate" checked> Yes!! 
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </form>
                </div>
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-briefcase-outline"></i>Work Experiences</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form method="post" action="{{route('saveWorkExp')}}" name="work" id="work" class="form-inline">
                    @csrf
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="company">Company</label>
                        <input id="company" class="form-control input-group-lg" type="text" name="company" title="Enter Company" placeholder="
                        <?php
                        if($errors->has('company')){
                        echo $errors->first('company');
                    } else {
                      echo 'Company name';
                    };
                         ?>"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="designation">Designation</label>
                        <input id="designation" class="form-control input-group-lg" type="text" name="designation" title="Enter designation" placeholder="designation name" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="from-date">From</label>
                        <input id="from-date" class="form-control input-group-lg" type="text" name="from" title="Enter a Date" placeholder="from"  />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="to-date" class="">To</label>
                        <input id="to-date" class="form-control input-group-lg" type="text" name="to" title="Enter a Date" placeholder="to"  />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="work-city">City/Town</label>
                        <input id="work-city" class="form-control input-group-lg" type="text" name="city" title="Enter city" placeholder="Your city" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="work-description">Description</label>
                        <textarea id="work-description" name="description" class="form-control" placeholder="Some texts about my work" rows="4" cols="400"></textarea>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-2 static">
              
              <!--Sticky Timeline Activity Sidebar-->
              <div id="sticky-sidebar">
                <h4 class="grey">Sarah's activity</h4>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Commended on a Photo</p>
                    <p class="text-muted">5 mins ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Has posted a photo</p>
                    <p class="text-muted">an hour ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Liked her friend's post</p>
                    <p class="text-muted">4 hours ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> has shared an album</p>
                    <p class="text-muted">a day ago</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
@endsection

@section('footer')
@parent
@endsection
