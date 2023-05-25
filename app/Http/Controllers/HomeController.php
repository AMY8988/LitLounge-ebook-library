<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        $roles = Role::where('id','<',3)->get();
        return view('index' , compact(['categories' , 'roles']));
    }

    public function register(){
        $roles = Role::where('id','<',3)->get();
        return view('register' , compact('roles'));
    }

    public function login(){
        return view('login');
    }
}
