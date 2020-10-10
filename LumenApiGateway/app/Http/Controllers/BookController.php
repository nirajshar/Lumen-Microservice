<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;

use App\Services\BookService; 


class BookController extends Controller
{    

    use ApiResponser;

    /*
    * The service to consume the Book Miroservice
    */
    public $bookService;
    
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
        
    }

    public function index()
    {
        
    }

    public function store(Request $request)
    {

       
    }

    public function show($book)
    {
       
    }

    public function update(Request $request, $book)
    {
      
    }

    public function destroy($book)
    {
        
    }

}
