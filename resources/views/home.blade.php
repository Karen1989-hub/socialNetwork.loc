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

              <!-- Post Create Box
              ================================================= -->
              


              <div class="create-post">
                <div class="row">
                <form action="{{route('createNewPost')}}" method="post" enctype='multipart/form-data'>
                @csrf
                
                <input type="hidden" name="userName" value="{{$firstName}}">
                  <div class="col-md-7 col-sm-7">
                    <div class="form-group">                    
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-md" />
                      <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                    </div>
                  </div>
                  <div class="col-md-5 col-sm-5">
                    <div class="tools">
                      <!-- input type='file' -->
                        <div class="example-2">
                          <div class="form-group">
                           <input type="file" name="postFile" id="file" class="input-file">
                           <label for="file" class="btn btn-tertiary js-labelFile">
                            <i class="icon fa fa-check"></i>
                           <span class="js-fileName">Загрузить файл</span>
                           </label>
                          </div>
                         </div>
                         <!-- input type='file' end -->
                                          
                    </div>                     
                  </div>
                  <button type="submit" class="btn btn-primary pull-right">Publish</button>
                  </form>
                </div>
              </div><!-- Post Create Box End-->

              <!-- Post Content
              ================================================= -->
              @foreach($allPosts as $val)
              <div class="post-content">

                <!--Post Date-->
                <div class="post-date hidden-xs hidden-sm">
                  <h5>{{$val->userName}}</h5>
                  <p class="text-grey">{{$val->created_at}}</p>
                </div><!--Post Date End-->

                <img src="images/post-images/{{$val->postImage}}" alt="post-image" class="img-responsive post-image" />
                <div class="post-container">                 
                  <div class="post-detail">                   
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p>{{$val->aboutPost}}</p>
                      
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-comment">
                      <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                      <input type="text" class="form-control" placeholder="Post a comment">
                    </div>
                  </div>
                </div>
              </div>
              @endforeach            

             
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