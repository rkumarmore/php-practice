<?php

namespace App\Creational\Prototype;

class Author
{
    private $name;
    private $pages;

    function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addPage(Page $page): void
    {
        $this->pages[] = $page;
    }
}
