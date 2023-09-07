<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
     
        return view('index', compact('books'));
     }
     
     
         public function create(){
             return view('create');
         }
     
     
         public function store(BookStoreRequest $request){


          
           //$extension_name = $request->file('image')->getClientOriginalExtension();

           $path_image = '';
           if($request->hasFile('image')){
                $file_name = $request->file('image')->getClientOriginalName();
                $path_image = $request->file('image')->storeAs('public/images', $file_name);

           }
             
             Book::create([
     
                 'title'=> $request->title,
                 'pages'=> $request->pages,
                 'image'=> $path_image
             ]);
             return redirect()->route('book.index');
         }

         public function show($book){

            $book = Book::find($book);
           if(!$book){
            abort(404);
           }
           return view('show', compact('book'));
            
        }
}
