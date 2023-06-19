<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashBoardHomeController extends Controller
{
    public function index(){

        $books = Book::all();
        $categories = Category::all();
        $users = User::all();

        return view('dashboard.home' , compact(['books' , 'categories' , 'users']));
    }
}
