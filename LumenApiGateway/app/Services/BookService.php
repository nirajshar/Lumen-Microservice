<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class BookService
{
    use ConsumesExternalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }

    public function obtainAllBooks()
    {
        return $this->performRequest('GET', '/books');
    }

    public function createOneBook($data)
    {
        return $this->performRequest('POST', '/books', $data);
    }

    public function obtainOneBook($book)
    {
        return $this->performRequest('GET', "/books/{$book}");
    }

    public function editOneBook($data , $book)
    {
        return $this->performRequest('PUT', "/books/{$book}", $data);
    }

    public function deleteOneBook($book)
    {
        return $this->performRequest('DELETE', "/books/{$book}");
    }
}