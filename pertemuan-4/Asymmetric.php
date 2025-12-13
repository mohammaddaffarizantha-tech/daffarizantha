<?php

class Book
{
    public function __construct(
        public private(set) string $title,
        public protected(set) string $author
    ) {
    }
}

$bk = new Book('How to PHP', 'Ada');
echo $bk->title;
