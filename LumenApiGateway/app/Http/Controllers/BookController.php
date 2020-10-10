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
        return $this->successResponse($this->bookService->obtainAllBooks());       
    }

    public function store(Request $request)
    {
       return $this->successResponse($this->bookService->createOneBook($request->all(), Response::HTTP_CREATED));
    }

    public function show($book)
    {
        return $this->successResponse($this->bookService->obtainOneBook($book));       
    }

    public function update(Request $request, $book)
    {
        return $this->successResponse($this->bookService->editOneBook($request->all(), $book));        
    }

    public function destroy($book)
    {
        return $this->successResponse($this->bookService->deleteOneBook($book));        
    }

}
