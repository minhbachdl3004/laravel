<?php

    include_once "Book_Model.php";
    $bookModel = new Book_Model();
    $data['isbn'] = addslashes($_POST['isbn']);
    $data['title'] = addslashes($_POST['title']);
    $data['author'] = addslashes($_POST['author']);
    $data['price'] = addslashes($_POST['price']);

    $bookModel->insertBooks($data['isbn'],$data['title'],$data['author'],null,null,$data['price']);
?>