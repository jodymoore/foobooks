<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /*
     *  get /books
     */
    public function index() {
        return 'View all books...';
  }

  /*
   *  Show
   */
  public function show($title = null) {

    return view('books.show')->with([

          'title' => $title,

      ]);
  }
  
}
