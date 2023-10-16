<?php
class Book {
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct($isbn, $title, $author, $available) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getAvailable() {
        return $this->available;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setAvailable($available) {
        $this->available = $available;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }

    public function __call($method, $args) {
        if (strpos($method, 'get') === 0) {
            $property = lcfirst(substr($method, 3));
            return $this->$property;
        } elseif (strpos($method, 'set') === 0) {
            $property = lcfirst(substr($method, 3));
            $this->$property = $args[0];
        }
    }

    public function __toString() {
        return "Book - ISBN: {$this->isbn}, Title: {$this->title}, Author: {$this->author}, Available: {$this->available}";
    }
}
?>
