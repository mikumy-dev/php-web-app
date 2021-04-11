<?php

    include("../object/book.php");

    $book = new Book(1, "book1", 100, 200);
    
    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($book);
    exit;
    
?>