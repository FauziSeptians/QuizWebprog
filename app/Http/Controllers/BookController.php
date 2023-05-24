<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\book_category;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //

    public function viewdata(){
        $data = Book::all();
        $category = Category::all();
        // dd($data);
        return view('homegiant',[
            'data' => $data,
            'category' => $category,
        ]);
    }

    public function detaildata($id){
        $data = Book::find($id);
        $category = Category::all();
        // dd($data);
        return view('detailpage',[
            'data' => $data,
            'category' => $category,
        ]);
    }

    public function categoryfilter($id){
        $data = Category::find($id);
        $category = Category::all();
        // dd($data->books);
        // dd($data);
        return view('categorypage',[
            'title' => $data->name,
            'data' => $data->books,
            'category' => $category,
        ]);
    }

    public function publisherview(){
        $data = Publisher::all();
        $category = Category::all();
        return view('publisherpage',[
            'data' => $data,
            'category' => $category,
        ]);
    }

    public function contact(){
        $category = Category::all();
        return view('contactpage',[
            'category' => $category,
        ]);
    }

    public function detailpublisher($id){
        $publisher = Publisher::find($id);
        $books = $publisher->books;
        $category = Category::all();

        return view('detailpublisher',[
            'publisher' => $publisher,
            'data'=> $books,
            'category' => $category
        ]);
    }

}
