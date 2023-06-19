<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function register(){
        $roles = Role::where('id','<',3)->get();
        $categories = Category::all();
        return view('register' , compact(['roles' , 'categories']));
    }

    public function login(){
        $categories = Category::all();
        return view('login' , compact('categories'));
    }

    public function index(){
        $books = Book::all()->take(4);
        $categories = Category::all();
        $roles = Role::where('id','<',3)->get();
        return view('page.home' , compact(['categories' , 'roles' , 'books']));
    }



    public function bookList(){

        if (request('keyword')){

            $keyword = request('keyword');
            $books = Book::when( request("keyword") , function ($query){
                $keyword = request('keyword');
                $query->where("title" , "like" , "%$keyword%")
                ->orWhere( "description" , "like" , "%$keyword%");
            })->orWhereHas( 'user' , function($query) use ($keyword) {
                $query->where('name' , $keyword);
            })->orWhereHas( 'categories' , function($query) use ($keyword) {
                $query->where('name' , $keyword);
            })->get();

        }else{

            $books = Book::all();
        }

        $categories = Category::all();
        $roles = Role::where('id','<',3)->get();
        return view('page.book' , compact(['categories' , 'roles' , 'books']));
    }


    public function booksBaseCate(){
        if(request('keyword')){

            $books = Book::whereHas('categories', function($query) {
                $keyword = request('keyword');
                $query->where('name', 'like', "%{$keyword}%");
            })->with('categories')->get();
        }else{
            $books = Book::all();
        }

        $categories = Category::all();
        $roles = Role::where('id','<',3)->get();
        return view('page.book' , compact(['categories' , 'roles' , 'books']));
    }


}
