<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;



class changeUserInformController extends Controller
{
    public function changeBasicInform(Request $request){         

    $firstName = $request->input('firstName');
    $lastName = $request->input('lastName');
    $gender = $request->input('gender');
    $email = $request->input('email');
    $day = $request->input('day');
    $month = $request->input('month');
    $year = $request->input('year');
    $city = $request->input('city');
    $country = $request->input('country');
    $basicInformation = $request->input('basicInformation');
    //month year city country basicInformation
    //dd($day,$month,$year,$city,$country);
    $id = Auth::id();

    $update = User::find($id);
    if($firstName != ""){
        $request->session()->put('autentificateUserfirstName',$firstName);
        $update->firstName = $firstName;
    }
    if($lastName != ""){
        $request->session()->put('autentificateUserLastName',$lastName);
        $update->lastName = $lastName;
    }
    if($gender != ""){
        $request->session()->put('gender',$gender);
        $update->gender = $gender;
    }
    if($email != ""){
        $update->email = $email;
    }         
    if($day != "day"){
        $update->day = $day;
    }
    if($month != "month"){
        $update->month = $month;
    }
    if($year != "year"){
        $update->year = $year;
    }
    if($city != ""){
        $update->city = $city;
    }
    if($country != ""){
        $update->country = $country;
    }
    if($basicInformation != ""){
        $update->aboutMe= $basicInformation;
    }
    $update->save();    

        return back();
    }

    public function saveEducat(){
        return back();
    }

    public function saveWorkExp(){
        return back();
    }
    
}
