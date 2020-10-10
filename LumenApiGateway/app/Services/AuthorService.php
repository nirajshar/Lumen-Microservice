<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService
{
    use ConsumesExternalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
    }

    public function obtainAllAuthors()
    {
        return $this->performRequest('GET', '/authors');
    }

    public function createOneAuthor($data)
    {
        return $this->performRequest('POST', '/authors', $data);
    }

    public function obtainOneAuthor($author)
    {
        return $this->performRequest('GET', "/authors/{$author}");
    }

    public function editOneAuthor($data , $author)
    {
        return $this->performRequest('PUT', "/authors/{$author}", $data);
    }

    public function deleteOneAuthor($author)
    {
        return $this->performRequest('DELETE', "/authors/{$author}");
    }
}