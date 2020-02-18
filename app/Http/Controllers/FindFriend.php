<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ProfilImage;
use Auth;
use App\WorkExperien;
use App\SaveMyEducation;
use App\FriendRequest;
use App\Friend;

class FindFriend extends Controller
{
    // public function findUser(Request $request){
    //     $searchUser = $request->input('searchUser');
    //     $request->session()->put('wantedUser',$searchUser);
    //     dd($searchUser);
    //     $arr = ["karen","aroyan"];
    //     return response()->json(['user'=> $searchUser,'name'=>'arr'], 200);
    //    //
    // }

    public function showUsers(Request $request){
        $wantedUser = $request->input('searchUser');  
      
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

        //get fineded users
        $users = User::where('firstName',$wantedUser)->get();



        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg,'users'=>$users];
        return view('usersList',$arr);
    }

    public function guestPage(Request $request){
        
        $id = $request->input('userId');
        $utentId = Auth::id();
        
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

        //request has been or not been sent
        $req = FriendRequest::where('from',$utentId)->where('to',$id)->count();

         $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg,
         'workInfo'=>$workInfo,'educInform'=>$educInform,'mail'=>$mail,'day'=>$day,'month'=>$month,
        'year'=>$year,'city'=>$city,'country'=>$country,'id'=>$id,'req'=>$req
        ];
        return view('guestPage',$arr);        
    }

    public function setFriendRequest(Request $request){
        $utentId = Auth::id();        
        $id = $request->input('id');

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

        //sender user inform
        $senders = User::find($utentId);
        $senders_firstName = $senders->firstName;
        $senders_lastName = $senders->lastName;
        $senders_imageNam = ProfilImage::where('userId',$utentId)->get();
        $senders_imageName = $senders_imageNam[0]->imageName;        

        //request has been or not been sent
        $req = FriendRequest::where('from',$utentId)->where('to',$id)->count();        
        if($req==0){
           FriendRequest::create(['from'=>$utentId,
           'from_frstName'=>$senders_firstName,'from_lastName'=>$senders_lastName,
           'from_imageName'=>$senders_imageName,'to'=>$id]);
           $req=1;
        }

         $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg,
         'workInfo'=>$workInfo,'educInform'=>$educInform,'mail'=>$mail,'day'=>$day,'month'=>$month,
        'year'=>$year,'city'=>$city,'country'=>$country,'id'=>$id,'req'=>$req
        ];

        
        
        return view('guestPage',$arr);
    }

    public function insertAcceptanceОfRequest(Request $request){
        //get reqest sender inform
        $whoseRequest = $request->input('whoseRequest');        
        $requestFirstName = $request->input('requestFirstName');
        $requestLastName = $request->input('requestLastName');
        $requestImageName = $request->input('requestImageName');

        //get autentificate user inform
        $id = Auth::id();
        $row = User::find($id);
        $myFirstName = $row->firstName;
        $myLastName = $row->lastName;
        $img = ProfilImage::where('userId',$id)->get();
        $myImageName = $img[0]->imageName;

        //insert data in DB
        Friend::create(['friend1_firstName'=>$myFirstName,'friend1_lastName'=>$myLastName,
        'friend1_imageName'=>$myImageName,'friend1'=>$id,'friend2_firstName'=>$requestFirstName,
        'friend2_lastName'=>$requestLastName,'friend2_imageName'=>$requestImageName,
        'friend2'=>$whoseRequest]);
 
        
        $del = FriendRequest::where('from',$whoseRequest)->where('to',$id)->get();
        $deletId = $del[0]->id;
        $delete = FriendRequest::find($deletId);
        $delete->delete();



        //dd($whoseRequest,$requestFirstName,$requestLastName,$requestImageName);
        return response()->json(['msg'=>$whoseRequest,'mm'=>$requestImageName], 200);
    }
}
