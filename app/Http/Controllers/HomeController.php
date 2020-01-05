<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\SaveMyEducation;

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
        $row = User::find($id);         
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;
        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'gender'=>$gender];
        
        return view('home',$arr);
    }
    public function about(){
        $id = Auth::id();
        $row = User::find($id);
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $aboutMe = $row->aboutMe;
        $gender = $row->gender;

        $educInform = SaveMyEducation::where('userId',$id)->get();
        $arr = ['aboutMe'=>$aboutMe,'educInform'=>$educInform,
        'firstName'=>$firstName,'lastName'=>$lastName,'gender'=>$gender];
        return view('about',$arr);
    }
    public function album(){
        $id = Auth::id();
        $row = User::find($id);
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;
        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'gender'=>$gender];

        return view('album',$arr);
    }
    public function friends(){
        $id = Auth::id();
        $row = User::find($id);
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;
        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'gender'=>$gender];

        return view('friends',$arr);
    }
    public function editProf(){    
        $id = Auth::id();
        $row = User::find($id);
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;
        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'gender'=>$gender]; 
        return view('editProfBasic',$arr);
    }
    public function educEndWork(){
        $id = Auth::id();
        $row = User::find($id);
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;
        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'gender'=>$gender]; 
        return view('educEndWork',$arr);
    }
    public function myInterest(){
        $id = Auth::id();
        $row = User::find($id);
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;
        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'gender'=>$gender]; 
        return view('myInterest',$arr);
    }
    public function changePassword(){
        $id = Auth::id();
        $row = User::find($id);
        $firstName = $row->firstName;
        $lastName = $row->lastName;
        $gender = $row->gender;
        $arr = ['firstName'=>$firstName,'lastName'=>$lastName,'gender'=>$gender]; 
        return view('changePassword',$arr);
    }
   
}
