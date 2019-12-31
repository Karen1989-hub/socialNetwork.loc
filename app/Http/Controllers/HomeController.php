<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        return view('home');
    }
    public function about(){
        return view('about');
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
