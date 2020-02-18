<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from mythemestore.com/friend-finder/newsfeed-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 21:43:56 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Chatroom | Send and Receive Messages</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/jquery.scrollbar.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
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
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">           
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

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

    			<!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3 static">
            <div class="profile-card">
            	<img src="images/users/user-1.jpg" alt="user" class="profile-photo" />
            	<h5><a href="timeline.html" class="text-white">Sarah Cruiz</a></h5>
            	<a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="{{route('home')}}">Home</a></div></li>
              
            </ul><!--news-feed links ends-->
            
          </div>
    			<div class="col-md-7">

            
            <!-- Chat Room
            ================================================= -->
            <div class="chat-room">
              <div  class="row">
                <div class="col-md-5">

                  <!-- Contact List in Left-->
                  <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">

                    <li class="active">
                      <a href="#contact-1" data-toggle="tab">
                        <div class="contact">
                        	<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left"/>
                        	<div class="msg-preview">
                        		<h6>Linda Lohan</h6>
                        		<p class="text-muted">Hi there, how are you</p>                                
                                <small class="text-muted">13 hour ago</small>                         
                        </div>
                      </a>
                    </li>
                    
                    <li>
                      <a href="#contact-3" data-toggle="tab">
                        <div class="contact">
                          <img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6>Sophia Lee</h6>
                            <p class="text-muted">Okay fine. thank you</p>
                            <small class="text-muted">13 hour ago</small>                           
                          </div>
                        </div>
                      </a>
                    </li>  
                  
                                                           
                  </ul><!--Contact List in Left End-->

                </div>
                <div class="col-md-7">

                  <!--Chat Messages in Right-->
                  <div class="tab-content scrollbar-wrapper wrapper scrollbar-outer">
                    <div class="tab-pane active" id="contact-1">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Linda Lohan</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>Hi honey, how are you doing???? Long time no see. Where have you been?</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>I have been on vacation</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>it was a great time for me. we had a lot of fun <i class="em em-blush"></i></p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Linda Lohan</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>that's cool I wish I were you <i class="em em-expressionless"></i></p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p><i class="em em-hand"></i></p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Linda Lohan</h5>
                              	<small class="text-muted">a min ago</small>
                              </div>
                              <p>Hi there, how are you</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                   
                    <div class="tab-pane" id="contact-3">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah  Cruiz</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sophia Lee</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah  Cruiz</h5>
                              	<small class="text-muted">13 hours ago</small>
                              </div>
                              <p>Okay fine. thank you</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                   
                   
                  
                  </div><!--Chat Messages in Right End-->

                  <div class="send-message">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type your message">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Send</button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>

    			<!-- Newsfeed Common Side Bar Right
          ================================================= -->
    			<div class="col-md-2 static">
          
          </div>
    		</div>
    	</div>
    </div>

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
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>

  </body>

<!-- Mirrored from mythemestore.com/friend-finder/newsfeed-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 21:43:57 GMT -->
</html>
