<?php

require_once __DIR__ . '/3.1-book.php';
require_once __DIR__ . '/3.2-customer.php';
//*************************************************************************** */
// $book1 = new Book("1984", "George Orwell", 9785267006323, 12);
// $book2 = new Book("To Kill a Mockingbird", "Harper Lee", 9780061120084, 2);

// $customer1 = new Customer(1, 'John', 'Doe', 'johndoe@mail.com');
// $customer2 = new Customer(2, 'Mary', 'Poppins', 'mp@mail.com');

// $book1->available = 2; // OK
//$customer1->id = 3; // Error!
// var_dump($book1);
// var_dump($book2);
// var_dump($customer1);
// var_dump($customer2);
//************************************************************************* */
$customer1 = new Customer(2, 'John', 'Doe', 'johndoe@mail.com');
$customer2 = new Customer(null, 'Mary', 'Poppins', 'mp@mail.com');
$customer3 = new Customer(7, 'James', 'Bond', '007@mail.com');
var_dump($customer1);
var_dump($customer2);
var_dump($customer3);
// echo "<hr>";

// Customer::getLastId();
// $customer1::getLastId();
// var_dump($customer1);

