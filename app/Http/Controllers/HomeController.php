<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\SaveMyEducation;
use App\WorkExperien;
use App\ProfilImage;
use App\Post;
use App\Like;
use App\FriendRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $id = Auth::id();
        //insert null in userImage
        ProfilImage::firstOrCreate([
            'userId' => $id,
            'imageName' =>'null'        
            
        ]);
        
        $row = User::find($id);         
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;

        //get Profile image
        $ProfImage = ProfilImage::where('userId',$id)->get();     
        if($ProfImage[0]->imageName=="null" && $gender == "male"){
            $userImg = "generic-user1.jpg";
        } else if($ProfImage[0]->imageName=="null" && $gender == "female"){
            $userImg = "generic-user-female.png";
        } else if($ProfImage[0]->imageName!="null"){
            $userImg = $ProfImage[0]->imageName;
        };

        //get all posts
        $allPosts = Post::orderByDesc('id')->get();
        
        //get posts likes count
       // $postLikeCount = Like::where('toWhom'=>)
        

        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg,
        'allPosts'=>$allPosts];        
        return view('home',$arr);
    }
    public function about(){
        $id = Auth::id();
        $row = User::find($id);
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $aboutMe = $row->aboutMe;
        $gender = $row->gender;

        //get Profile image
        $ProfImage = ProfilImage::where('userId',$id)->get();     
        if($ProfImage[0]->imageName=="null" && $gender == "male"){
            $userImg = "generic-user1.jpg";
        } else if($ProfImage[0]->imageName=="null" && $gender == "female"){
            $userImg = "generic-user-female.png";
        } else if($ProfImage[0]->imageName!="null"){
            $userImg = $ProfImage[0]->imageName;
        };

        //get email
        $mail = $row->email;

        //get brtday
        $day = $row->day;
        $month = $row->month;
        $year = $row->year;

        //get country
        $city = $row->city;
        $country = $row->country;        

        //get work inform
        $workInfo = WorkExperien::where('userId',$id)->get();  

        //get education inform
        $educInform = SaveMyEducation::where('userId',$id)->get();


        $arr = ['aboutMe'=>$aboutMe,'educInform'=>$educInform,
        'firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg,
        'workInfo'=>$workInfo,'mail'=>$mail,'day'=>$day,'month'=>$month,
        'year'=>$year,'city'=>$city,'country'=>$country];
        
        return view('about',$arr);
    }
    public function album(){     

        $id = Auth::id();      

        $row = User::find($id);
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;

        //get Profile image
        $ProfImage = ProfilImage::where('userId',$id)->get();     
        if($ProfImage[0]->imageName=="null" && $gender == "male"){
            $userImg = "generic-user1.jpg";
        } else if($ProfImage[0]->imageName=="null" && $gender == "female"){
            $userImg = "generic-user-female.png";
        } else if($ProfImage[0]->imageName!="null"){
            $userImg = $ProfImage[0]->imageName;
        };

        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg];

        return view('album',$arr);
    }
    public function friends(){
        $id = Auth::id();
        $row = User::find($id);
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;

        //get Profile image
        $ProfImage = ProfilImage::where('userId',$id)->get();     
        if($ProfImage[0]->imageName=="null" && $gender == "male"){
            $userImg = "generic-user1.jpg";
        } else if($ProfImage[0]->imageName=="null" && $gender == "female"){
            $userImg = "generic-user-female.png";
        } else if($ProfImage[0]->imageName!="null"){
            $userImg = $ProfImage[0]->imageName;
        };

        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg];

        return view('friends',$arr);
    }
    public function editProf(){    
        $id = Auth::id();
        $row = User::find($id);
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;

        //get Profile image
        $ProfImage = ProfilImage::where('userId',$id)->get();     
        if($ProfImage[0]->imageName=="null" && $gender == "male"){
            $userImg = "generic-user1.jpg";
        } else if($ProfImage[0]->imageName=="null" && $gender == "female"){
            $userImg = "generic-user-female.png";
        } else if($ProfImage[0]->imageName!="null"){
            $userImg = $ProfImage[0]->imageName;
        };

        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg];      

        return view('editProfBasic',$arr);
    }
    public function educEndWork(){
        $id = Auth::id();
        $row = User::find($id);
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;

        //get Profile image
        $ProfImage = ProfilImage::where('userId',$id)->get();     
        if($ProfImage[0]->imageName=="null" && $gender == "male"){
            $userImg = "generic-user1.jpg";
        } else if($ProfImage[0]->imageName=="null" && $gender == "female"){
            $userImg = "generic-user-female.png";
        } else if($ProfImage[0]->imageName!="null"){
            $userImg = $ProfImage[0]->imageName;
        };

        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg]; 
        return view('educEndWork',$arr);
    }
    
    public function changePassword(){
        $id = Auth::id();
        $row = User::find($id);
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;

        //get Profile image
        $ProfImage = ProfilImage::where('userId',$id)->get();     
        if($ProfImage[0]->imageName=="null" && $gender == "male"){
            $userImg = "generic-user1.jpg";
        } else if($ProfImage[0]->imageName=="null" && $gender == "female"){
            $userImg = "generic-user-female.png";
        } else if($ProfImage[0]->imageName!="null"){
            $userImg = $ProfImage[0]->imageName;
        };

        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg]; 
        return view('changePassword',$arr);
    }
  

    public function getUsersList(){
        $id = Auth::id();
        $row = User::find($id);         
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;

        //get Profile image
        $ProfImage = ProfilImage::where('userId',$id)->get();     
        if($ProfImage[0]->imageName=="null" && $gender == "male"){
            $userImg = "generic-user1.jpg";
        } else if($ProfImage[0]->imageName=="null" && $gender == "female"){
            $userImg = "generic-user-female.png";
        } else if($ProfImage[0]->imageName!="null"){
            $userImg = $ProfImage[0]->imageName;
        };

        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg];
        return view('usersList',$arr);
    }

    public function friendRequest(){
         $id = Auth::id();

         $row = User::find($id);         
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;

        //get Profile image
        $ProfImage = ProfilImage::where('userId',$id)->get();     
        if($ProfImage[0]->imageName=="null" && $gender == "male"){
            $userImg = "generic-user1.jpg";
        } else if($ProfImage[0]->imageName=="null" && $gender == "female"){
            $userImg = "generic-user-female.png";
        } else if($ProfImage[0]->imageName!="null"){
            $userImg = $ProfImage[0]->imageName;
        };

        //get request users information
        $requests = FriendRequest::where('to',$id)->get();
        // $request_firstName = $requests[0]->from_frstName;
        // $request_lastName = $requests[0]->from_lastName;
        // $request_imageName = $requests[0]->from_imageName;
           //dd($requests);

        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg,
        'requests'=>$requests];       
        return view('friendRequest',$arr);
    }
   
}
