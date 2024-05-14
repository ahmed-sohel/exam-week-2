<?php

class Book {
  // TODO: Add properties as Private
  private $title;
  private $availableCopies;
  
  public function __construct($title, $availableCopies) {
    // TODO: Initialize properties
    $this->title = $title;
    $this->availableCopies = $availableCopies;
  }
 

  // TODO: Add getTitle method
  function getTitle() {
    return $this->title;
  }
 

  // TODO: Add getAvailableCopies method
  function getAvailableCopies(){
    return $this->availableCopies;
  }
 

  // TODO: Add borrowBook method
  function borrowBook() {
    $this->availableCopies = $this->availableCopies - 1;
  }
 

  // TODO: Add returnBook method
  function returnBook() {
    $this->availableCopies = $this->availableCopies + 1;
  }
}
 
 
 class Member {
  // TODO: Add properties as Private
  private $name;
 
 
  public function __construct($name) {
    // TODO: Initialize properties
    $this->name = $name;
  }

 
  // TODO: Add getName method
  function getName() {
    return $this->name;
  }

  
  // TODO: Add borrowBook method
  function borrowBook(Book $book) {
    $book->borrowBook();
  }

 
  // TODO: Add returnBook method
  function returnBook(Book $book) {
    $book->returnBook();
  }

}
 
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

$member1->borrowBook($book1);
$member2->borrowBook($book2);


echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}<br>";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}<br>";
