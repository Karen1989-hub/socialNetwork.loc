@section('header')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel'</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!-- Styles -->     
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />		
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />		
        <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}" />        
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
        <!-- <link href="css/emoji.css" rel="stylesheet"> -->
        <link href="{{asset('css/emoji.css')}}" rel="stylesheet">    

    <!--Favicon-->
        <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
</head>
<body>

    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-register.html"><img src="images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">                     
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu page-list">
                  
                  <li><a href="newsfeed.html">Newsfeed</a></li>                  
                  <li><a href="newsfeed-friends.html">My friends</a></li>
                  <li><a href="newsfeed-messages.html">Chatroom</a></li>
                  <li><a href="newsfeed-images.html">Images</a></li>
                  <li><a href="newsfeed-videos.html">Videos</a></li>
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>               
                  <li><a href="edit-profile-basic.html">Edit Profile</a></li>
                  <li><a href="contact.html">Contact Us</a></li>                 
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
     </a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf        
    </form>
     </li>
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">
          @show
         @section('userImage')
          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                   @if(Session::get('gender')=="male")
                  <img src="images/users/generic-user1.jpg" alt="" class="img-responsive profile-photo" />
                @elseif(Session::get('gender')=="female") 
                  <img src="images/users/generic-user-female.png" alt="" class="img-responsive profile-photo" />
                @endif
                  <h3>XXX</h3>
                  <p class="text-muted">Creative Director</p>
                </div>
              </div>
              @show
              @section('navbar')
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="{{route('home')}}" class="active">Timeline</a></li>
                  <li><a href="{{route('about')}}">About</a></li>
                  <li><a href="{{route('album')}}">Album</a></li>
                  <li><a href="{{route('friends')}}">Friends</a></li>
                  <li><a href="">Chatroom</a></li>
                  <li class="active"><a href="{{route('editProf')}}">Adit profile</a></li>
                  
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
               @if(Session::get('gender')=="male")
                  <img src="images/users/generic-user1.jpg" alt="" class="img-responsive profile-photo" />
                @elseif(Session::get('gender')=="female") 
                  <img src="images/users/generic-user-female.png" alt="" class="img-responsive profile-photo" />
                @endif
              <h4>{{Session::get('autentificateUserfirstName')}} {{Session::get('autentificateUserLastName')}}</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="{{route('home')}}">Timeline</a></li>
                  <li><a href="{{route('about')}}">About</a></li>
                  <li><a href="{{route('album')}}">Album</a></li>
                  <li><a href="{{route('friends')}}">Friends</a></li>
                  <li><a href="">Chatroom</a></li>
                  <li class="active"><a href="{{route('editProf')}}">Adit profile</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        @show
        @section('editProfMenu')
       <div id="page-contents">
          <div class="row">
            <div class="col-md-3">
              
              <!--Edit Profile Menu-->
              <ul class="edit-menu">
              	<li class="active"><i class="icon ion-ios-information-outline"></i><a href="{{route('editProf')}}">Basic Information</a></li>
              	<li><i class="icon ion-ios-briefcase-outline"></i><a href="{{route('educEndWork')}}">Education and Work</a></li>
              	<li><i class="icon ion-ios-heart-outline"></i><a href="{{route('myInterest')}}">My Interests</a></li>                
              	<li><i class="icon ion-ios-locked-outline"></i><a href="{{route('changePassword')}}">Change Password</a></li>
              </ul>
            </div>
            <div class="col-md-7">
        @show
        @section('content')
              <!-- Basic Information
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Edit basic information</h4>
                  <p></p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form method="POST" action="{{ route('changeBasicInform') }}" name="basic-info" id="basic-info" class="form-inline">
                    @csrf
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname">First name</label>
                        <input id="firstname" class="form-control input-group-lg" type="text" name="firstName" title="Enter first name" placeholder="First name"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="">Last name</label>
                        <input id="lastname" class="form-control input-group-lg" type="text" name="lastName" title="Enter last name" placeholder="Last name"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email">My email</label>
                        <input id="email" class="form-control input-group-lg" type="text" name="email" title="Enter Email" placeholder="My Email"/>
                      </div>
                    </div>
                    <div class="row">
                      <p class="custom-label"><strong>Date of Birth</strong></p>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="day" name="day">
                          <option selected>Day</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                          <option>13</option>
                          <option>14</option>
                          <option>15</option>
                          <option>16</option>
                          <option>17</option>
                          <option>18</option>
                          <option>19</option>
                          <option>20</option>
                          <option>21</option>
                          <option>22</option>
                          <option>23</option>
                          <option>24</option>
                          <option>25</option>
                          <option>26</option>
                          <option>27</option>
                          <option>28</option>
                          <option>29</option>
                          <option>30</option>
                          <option>31</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="month" name="month">
                          <option selected>Month</option>
                          <option>Jan</option>
                          <option>Feb</option>
                          <option>Mar</option>
                          <option>Apr</option>
                          <option>May</option>
                          <option>Jun</option>
                          <option>Jul</option>
                          <option>Aug</option>
                          <option>Sep</option>
                          <option>Oct</option>
                          <option>Nov</option>
                          <option>Dec</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <label for="year" class="sr-only"></label>
                        <select class="form-control" id="year" name="year">
                          <option selected>Year</option>
                          <option>2000</option>
                          <option>2001</option>
                          <option>2002</option>
                          <option>2004</option>
                          <option>2005</option>
                          <option>2006</option>
                          <option>2007</option>
                          <option>2008</option>
                          <option>2009</option>
                          <option>2010</option>
                          <option>2011</option>
                          <option>2012</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group gender">
                      <span class="custom-label"><strong>I am a: </strong></span>
                      <label class="radio-inline">
                        <input type="radio" name="gender" checked value="male">Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="female">Female
                      </label>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="city"> My city</label>
                        <input id="city" class="form-control input-group-lg" type="text" name="city" title="Enter city" placeholder="Your city"/>
                      </div>
                      <div class="form-group col-xs-6">
                         <label for="country">My country</label>
                        <input id="country" class="form-control input-group-lg" type="text" name="country" title="Enter country" placeholder="country"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-info">About me</label>
                        <textarea id="my-info" name="basicInformation" class="form-control" placeholder="Some texts about me" rows="4" cols="400"></textarea>
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
@show
@section('footer')
    <!-- Footer
    ================================================= -->
    <footer id="footer">
      
      <div class="copyright">
        <p>Thunder Team © 2016. All rights reserved</p>
      </div>
		</footer>
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    


    <!-- Scripts
    ================================================= -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>   
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky-kit.min.js')}}"></script>
    <script src="{{asset('js/jquery.scrollbar.min.js')}}"></script>    
    <script src="{{asset('js/script.js')}}"></script>   
</body>
</html>
@show