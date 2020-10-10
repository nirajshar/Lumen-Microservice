<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Services\AuthorService; 

class AuthorController extends Controller
{

    use ApiResponser;

    /*
    * The service to consume the Author Miroservice
    */
    public $authorService;
    
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index()
    {
        return $this->successResponse($this->authorService->obtainAllAuthors());       
    }

    public function store(Request $request)
    {
       return $this->successResponse($this->authorService->createOneAuthor($request->all(), Response::HTTP_CREATED));
    }

    public function show($author)
    {
        return $this->successResponse($this->authorService->obtainOneAuthor($author));       
    }

    public function update(Request $request, $author)
    {
        return $this->successResponse($this->authorService->editOneAuthor($request->all(), $author));        
    }

    public function destroy($author)
    {
        return $this->successResponse($this->authorService->deleteOneAuthor($author));        
    }

}
