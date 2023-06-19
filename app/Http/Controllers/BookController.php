<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  Book download for reader page
     public function downloadFile(Book $book){
        return response()->download(public_path( "storage/" . $book->fileUpload));
    }

    //book detail show for reader page
    public function bookshow(Book $book){
        $categories = Category::all();

        $relatedBooks = Book::whereHas( 'user' , function($query) use ($book) {
            $relatedUser = $book->user_id;
            $query->where('id' , $relatedUser);
        })->where("id", "!=" , $book->id)->get()->take(3);
        return view('page.bookDetail' , compact(['book' , 'categories' , 'relatedBooks']));
    }

    public function index()
    {

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
            })->paginate(7)->withQueryString();

        }else{

            if(auth()->user()->role->id == 3){
                $books = Book::paginate(7)->withQueryString();
            }else{
                $books = Book::where('user_id' , '=' , auth()->user()->id )->paginate(7)->withQueryString();
            };

        }

        return view('book.index' , compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('book.create' , compact('categories'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {

        $categories = $request->category_id;
        $book = new Book();
        $book->title = $request->title;
        $book->description = $request->description;
        $book->user_id = Auth::user()->id;

        if($request->hasFile('coverPhoto')){
             $fileName = time(). "_" . $request->file('coverPhoto')->getClientOriginalName();
             $filePath = $request->file('coverPhoto')->storeAs('photoUploads' , $fileName , 'public');
             $book->coverPhoto = $filePath;
        };

        if($request->hasFile('fileUpload')){
            $fileName = time(). "_" . $request->file('fileUpload')->getClientOriginalName();
            $filePath = $request->file('fileUpload')->storeAs('fileUploads' , $fileName , 'public');
            $book->fileUpload = $filePath;
       }

        $book->save();
        $book->categories()->attach($categories);
        return redirect()->route('book.index');
        // return print_r($book);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        if(Auth::user()->role->name == 'author'){
            if($book->user_id == Auth::user()->id){
                return view('book.show' , compact('book'));
            }else{
                return abort(404);
            }
        }else{
            return view('book.show' , compact('book'));
        }
    }





    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $categories = Category::all();

        if(Auth::user()->role->name == "author"){
            if($book->user_id == Auth::user()->id){
                return view('book.edit' , compact(['book' , 'categories']));
            }else{
                return abort(404);
            }
        }else{
            return view('book.edit' , compact(['book' , 'categories']));
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {


        $book->title = $request->title;
        $book->description = $request->description;


        if($request->hasFile('coverPhoto')){

            Storage::delete("public/photoUploads".$book->coverPhoto);

             $fileName = time(). "_" . $request->file('coverPhoto')->getClientOriginalName();
             $filePath = $request->file('coverPhoto')->storeAs('photoUploads' , $fileName , 'public');
             $book->coverPhoto = $filePath;
        };

        if($request->hasFile('fileUpload')){

            Storage::delete("public/fileUploads".$book->fileUpdate);

            $fileName = time(). "_" . $request->file('fileUpload')->getClientOriginalName();
            $filePath = $request->file('fileUpload')->storeAs('fileUploads' , $fileName , 'public');
            $book->fileUpload = $filePath;
       }

       $book->update();
       $categories = $request->category_id;
       $book->categories()->sync($categories);

       return redirect()->route('book.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        Storage::delete('public/photoUploads'.$book->coverPhoto);
        Storage::delete('public/fileUploads'.$book->fileUpload);
        $book->delete();
        return redirect()->route('book.index');
    }
}
