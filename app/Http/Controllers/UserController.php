<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::paginate(6);

        if (request('keyword')){

            $keyword = request('keyword');
            $users = User::when( request("keyword") , function ($query){
                $keyword = request('keyword');
                $query->where("name" ,  $keyword)
                ->orWhere( "email" , $keyword);
            })->orWhereHas( 'role' , function($query) use ($keyword) {
                $query->where('name' , $keyword);
            })->paginate(6)->withQueryString();

        }


        return view('user.index' , compact('users'));
    }

    public function loginCheck(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];



        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('status' , "Email doesn't match");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, Request $request)
    {
        $user = User::findOrFail($request->id);
        // dd(Auth::user()->id , $user->id);
        if(Auth::user()->id == $user->id){
            return view('user.edit' , compact('user'));
        }else{
            abort(404);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
