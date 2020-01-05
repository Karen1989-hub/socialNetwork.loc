<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SaveMyEducation;
use Auth;
use Validator;



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
        $update->firstName = $firstName;
    }
    if($lastName != ""){        
        $update->lastName = $lastName;
    }
    if($gender != ""){        
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

    public function saveEducat(Request $request){   
         $validator = Validator::make($request->all(),
            [
                'university' => 'required',
                'from' => 'required',
                'to' => 'required',
            ], [
                'university.required' => 'the field cannot be empty',
                'from.required' => 'the field cannot be empty',
                'to.required' => 'the field cannot be empty'                
            ]
        );  

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $id = Auth::id();
       $university = $request->input('university');     
       $from = $request->input('from'); 
       $to =  $request->input('to'); 
       $description =  $request->input('description'); 
       $graduate =  $request->input('graduate'); 
         
       $insert = new SaveMyEducation;      
       $insert->userId = $id;
       $insert->myUniversity = $university;
       $insert->educationFrom = $from;
       $insert->educationTo = $to;
       $insert->description = $description;
       $insert->graduated = $graduate;
       $insert->save();
        
        return back();
    }

    public function saveWorkExp(Request $request){
        $validator = Validator::make($request->all(),
            [
                'company' => 'required'                
            ], [
                'company.required' => 'the field cannot be empty'                           
            ]
        );  

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }        
        $company = $request->input('company');
        $designation = $request->input('designation');
        $from = $request->input('from');
        $to = $request->input('to');
        $city = $request->input('city');
        $description = $request->input('description');
 
        
        return back();
    }
    
}
