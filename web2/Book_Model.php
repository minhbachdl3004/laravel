<?php
    function ketnoiCSDL(){
        $database = mysqli_connect("localhost","root","");
        if(!$database){
            echo "Can't connect to database";
        }
        else{
            echo "Success to connect to database";
        }
    }
    class Book_Model{
        private $database;

        public function _construct(){
            $this->database =  ketnoiCSDL();
        }
        public function run_my_select_sql($sql){
            echo $sql;
            $result = mysqli_query($this->database, $sql);
            return $result;
        }
        public function getAllBooks(){
            $sql = "SELECT * FROM books WHERE 1";
            return $this->run_my_select_sql($sql);
        }
        public function getBooksByisbn($isbn){
            return $this->run_my_select_sql("SELECT * FROM books WHERE isbn = '$isbn'");
        }
        public function getBooksBytitle($title){
            return $this->run_my_select_sql("SELECT * FROM books WHERE title = '$title'");
        }
        public function insertBooks($isbn, $title, $author, $category, $images, $price){
            return $this->run_my_select_sql(
                "INSERT INTO books (isbn, author, title, category, images, prices) 
                    VALUES ($isbn, $author, $title, $category, $images, $price)");
        }
        public function updateBooks($isbn, $title, $author, $category, $images, $price){
            $sql = "UPDATE 'books'
             SET isbn= $isbn, author= $author, title= $title, category= $category, images= $images, prices = $price 
             WHERE isbn = $isbn";
        }
    }



?>