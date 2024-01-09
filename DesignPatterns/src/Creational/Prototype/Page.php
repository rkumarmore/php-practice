<?php

namespace App\Creational\Prototype;

class Page
{
    private $title;
    private $body;
    private $author;
    private $comments;

    public function __construct($title, $body, Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;

        $this->author->addPage($this);
    }

    function __clone()
    {
        $this->title = $this->title;
        $this->body = $this->body;
        $this->author = $this->author;

        $this->author->addPage($this);

        $this->comments = [];
    }

    function addComments(string $comment): void
    {
        $this->comments[] = $comment;
    }
}
