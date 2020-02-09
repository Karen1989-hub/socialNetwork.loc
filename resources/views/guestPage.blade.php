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
                  <li><a href="{{route('home')}}">Home</a></li>
                  <!-- <li><a href="{{route('about')}}">About</a></li> -->
                  <!-- <li><a href="{{route('album')}}">Album</a></li> -->
                  <!-- <li><a href="{{route('friends')}}">Friends</a></li> -->
                  <!-- <li><a href="">Chatroom</a></li> -->
                  
                  
                </ul>
                <ul class="follow-me list-inline">                  
                  <li>
                  <form action="{{route('setFriendRequest')}}" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{$id}}">
                  <strong>{{$id}}</strong>
                  <button type="submit" class="btn-primary">
                  @if($req==0)
                  Add Friend
                  @else
                  Request has been sent
                  @endif
                  </button>
                  </form>                  
                  </li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
                <img src="images/users/{{$userImg}}" alt="" class="img-responsive profile-photo" />
              <h3>{{$firstName}} {{$lastName}}</h3>              
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="{{route('home')}}" >Home</a></li>
                  <!-- <li><a href="{{route('about')}}">About</a></li> -->
                  <!-- <li><a href="{{route('album')}}">Album</a></li>-->
                  <!-- <li><a href="">Friend request</a></li> -->
                  <!-- <li><a href="{{route('friends')}}">Friends</a></li> -->
                  <!-- <li><a href="">Chatroom</a></li>  -->
                  
              </ul>
               <form action="{{route('setFriendRequest')}}" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{$id}}">
                  <button type="submit" class="btn-primary">
                  @if($req==0)
                  Add Friend
                  @else
                  Request has been sent
                  @endif
                  </button>
                  </form>    
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
                  <p>mail: {{$mail}}</p>
                  <p>birthday: {{$day}} {{$month}} {{$year}}</p>                  

                  
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
                  <p>country: {{$country}}</p>
                  <p>city: {{$city}}</p> 
                  <div class="google-maps">
                    <div id="map" class="map"></div>
                  </div>
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