<?php

// Load the Savant3 class file and create an instance.
require_once 'Savant3.php';
$tpl = new Savant3();

// Create a title.
$name = "Some Of My Favorite Books";

// Generate an array of book authors and titles.
$booklist = array(
    array(
        'author' => 'Hernando de Soto',
        'title' => 'The Mystery of Capitalism'
    ),
    array(
        'author' => 'Neal Stephenson',
        'title' => 'Cryptonomicon'
    ),
    array(
        'author' => 'Milton Friedman',
        'title' => 'Free to Choose'
    )
);

// Assign values to the Savant instance.
$tpl->title = $name;
$tpl->books = $booklist;

// Display a template using the assigned values.
$tpl->display('books.tpl.php');
?>
