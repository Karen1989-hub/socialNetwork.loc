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
                  <li><a href="{{route('about')}}" class="active">About</a></li>
                  <li><a href="{{route('album')}}">Album</a></li>
                  <li><a href="{{route('friends')}}">Friends</a></li>
                  <li><a href="">Chatroom</a></li>
                  <li><a href="{{route('editProf')}}">Adit profile</a></li>
                  
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
              <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
              <h4>Sarah Cruiz</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="{{route('home')}}">Timeline</a></li>
                  <li><a href="{{route('about')}}" class="active">About</a></li>
                  <li><a href="{{route('album')}}">Album</a></li>
                  <li><a href="{{route('friends')}}">Friends</a></li>
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

              <!-- About
              ================================================= -->
              <div class="about-profile">
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>Personal Information</h4>
                  <p>{{$aboutMe}}</p>
                </div>
              <!-- About Education
              ================================================= -->
              <div class="edit-profile-container">              
              <h4 class="grey"><i class="icon ion-ios-book-outline"></i> My education</h4>         
              </div>
              @foreach($educInform as $val)          
              
                <div class="about-content-block">                  
                  <div class="organization">
                    <img src="images/envato.png" alt="" class="pull-left img-org" />
                    <div class="work-info">
                      <h5>{{$val->myUniversity}}</h5>
                      <p>usman tevoxutyun@ - <span class="text-grey"> {{$val->educationFrom}} to {{$val->educationTo}}
                       @if($val->graduated == "graduate")
                       present
                       @else 
                       dont present
                       @endif
                       </span>
                       </p>
                    </div>
                  </div>       
                </div>
              @endforeach
                <!-- About Work Experiences
                ================================================= -->
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Work Experiences</h4>
                  @foreach($workInfo as $val)
                  <div class="organization">
                    <img src="images/envato.png" alt="" class="pull-left img-org" />
                    <div class="work-info">
                      <h5>{{$val->company}}</h5>
                      <p>{{$val->designation}}
                      @if($val->to != null)
                       - <span class="text-grey">{{$val->from}} 
                      @endif
                      @if($val->to != null)
                      to {{$val->to}}</span></p>
                      @endif
                      @if($val->to != null)
                      <p>city/Town : {{$val->cityTown}}</p>
                      @endif
                      @if($val->to != null)
                      <p>description : {{$val->description}}</p>
                      @endif
                    </div>
                  </div>                  
                  @endforeach
                </div>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-location-outline icon-in-title"></i>Location</h4>
                  <p>228 Park Eve, New York</p>
                  <div class="google-maps">
                    <div id="map" class="map"></div>
                  </div>
                </div>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-heart-outline icon-in-title"></i>Interests</h4>
                  <ul class="interests list-inline">
                    <li><span class="int-icons" title="Bycycle riding"><i class="icon ion-android-bicycle"></i></span></li>
                    <li><span class="int-icons" title="Photography"><i class="icon ion-ios-camera"></i></span></li>
                    <li><span class="int-icons" title="Shopping"><i class="icon ion-android-cart"></i></span></li>
                    <li><span class="int-icons" title="Traveling"><i class="icon ion-android-plane"></i></span></li>
                    <li><span class="int-icons" title="Eating"><i class="icon ion-android-restaurant"></i></span></li>
                  </ul>
                </div>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-chatbubble-outline icon-in-title"></i>Language</h4>
                    <ul>
                      <li><a href="#">Russian</a></li>
                      <li><a href="#">English</a></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="col-md-2 static">
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