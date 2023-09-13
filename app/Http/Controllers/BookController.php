<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->only('create', 'store');
    }


    public function index(){
        $books = Book::all();
     
        return view('books.index', compact('books'));
     }
     
     
         public function create(){
             return view('books.create');
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
             return redirect()->route('books.index')->with('success', 'Libro Caricato');
         }

         public function show(Book $book){

            return view('books.show', compact('book'));
           }

           public function edit(Book $book){
            
            return view('books.edit' , compact('book'));
           }
          
           public function update(BookUpdateRequest $request, Book $book){


          
            //$extension_name = $request->file('image')->getClientOriginalExtension();
 
            $path_image = $book->image;
            if($request->hasFile('image')){
                 $file_name = $request->file('image')->getClientOriginalName();
                 $path_image = $request->file('image')->storeAs('public/images', $file_name);
 
            }
              
              $book->update([
      
                  'title'=> $request->title,
                  'pages'=> $request->pages,
                  'image'=> $path_image
              ]);
              return redirect()->route('books.index')->with('success', 'Libro Aggiornato');
          }
            
           
          public function destroy(Book $book){
            $book->delete();
            return redirect()->route('books.index')->with('success', 'Libro Eliminato');
        }
}
