<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\SaveMyEducation;
use App\WorkExperien;
use App\ProfilImage;

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

        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg];        
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

        $workInfo = WorkExperien::where('userId',$id)->get();  

        $educInform = SaveMyEducation::where('userId',$id)->get();
        $arr = ['aboutMe'=>$aboutMe,'educInform'=>$educInform,
        'firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg,
        'workInfo'=>$workInfo];
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
    public function myInterest(){
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
        return view('myInterest',$arr);
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
   
}
