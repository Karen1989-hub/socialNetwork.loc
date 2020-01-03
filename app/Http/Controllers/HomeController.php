<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

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
        $request->session()->put('autentificateUserId',$id);
        $row = User::find($id);
        $autentificateUserfirstName = $row->firstName;
        $autentificateUserLastName = $row->lastName; 
        $gender = $row->gender;
       
        $request->session()->put('autentificateUserfirstName',$autentificateUserfirstName);
        $request->session()->put('autentificateUserLastName',$autentificateUserLastName);
        $request->session()->put('gender',$gender);        
        
        return view('home');
    }
    public function about(){
        $id = Auth::id();
        $row = User::find($id);
        $aboutMe = $row->aboutMe;
        $arr = ['aboutMe'=>$aboutMe];
        return view('about',$arr);
    }
    public function album(){
        return view('album');
    }
    public function friends(){
        return view('friends');
    }
    public function editProf(){
        return view('editProfBasic');
    }
    public function educEndWork(){
        return view('educEndWork');
    }
    public function myInterest(){
        return view('myInterest');
    }
    public function changePassword(){
        return view('changePassword');
    }
   
}
