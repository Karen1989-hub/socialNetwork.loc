<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ProfilImage;
use Auth;
use App\WorkExperien;
use App\SaveMyEducation;

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

         $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'userImg'=>$userImg,
         'workInfo'=>$workInfo,'educInform'=>$educInform,'mail'=>$mail,'day'=>$day,'month'=>$month,
        'year'=>$year,'city'=>$city,'country'=>$country,''
        ];
        return view('guestPage',$arr);        
    }
}
