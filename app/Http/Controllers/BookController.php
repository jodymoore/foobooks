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
      dump($title);
    return view('books.show')->with([
         
          'title' => $title,

      ]);
  }

    # app/Http/Controllers/BookController.php

      /**
    * GET
      * /search
    */
      public function search() {
          return view('books.search');
      }
      /**
  * GET
  * /books/new
  * Display the form to add a new book
  */
  public function createNewBook(Request $request) {
      return view('new');
  }


  /**
  * POST
  * /books/new
  * Process the form for adding a new book
  */
  public function storeNewBook(Request $request) {

      $this->validate($request, [
            'title' => 'required|min:3',
            'PublishedYear' => 'required|numeric',

        ]);

      $title = $request->input('title');

      # 
      #
      # [...Code will eventually go here to actually save this book to a database...]
      #
      #

      # Redirect the user to the page to view the book
      return redirect('/books/'.$title);
  }
  
}


