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
   *  get
   */
  public function view($title = null) {
    return 'you want to view the book '.$title;
  }
}
