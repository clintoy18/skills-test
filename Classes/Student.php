<?php

require_once "classes/Database.php";

class Student{

    private $connection;

    public function __construct()
    {
       $database = new Database();
       $this->connection = $database->connect();
    }

    //CRUD - CREATE STUDENT, READ all student , UPDATE student  , DELETE student.  


    //function to read all student from the database
    public function getAllStudent(){
        return $this->connection->query("SELECT * FROM students");
    }


    //get student by ID
    public function getById($idno){
        return $this->connection->query("SELECT * FROM students WHERE idno = $idno");
    }
    
    //function to create student
    public function add($idno,$lastname,$firstname,$year_level,$course){
        $stmt = $this->connection->prepare("INSERT INTO students(idno,lastname,firstname,year_level,course)  VALUES(?,?,?,?,?)"); 
        $stmt->bind_param("sssss",$idno,$lastname,$firstname,$year_level,$course);
        return $stmt->execute();
    }

    //update student
    public function update($idno,$lastname,$firstname,$year_level,$course){
        $stmt = $this->connection->prepare("UPDATE students SET lastname = ?, firstname = ? , year_level = ? , course = ? WHERE idno = $idno"); 
        $stmt->bind_param("ssss",$lastname,$firstname,$year_level,$course);
        return $stmt->execute();
    }

    //delete student
    public function delete($idno){
        return $this->connection->query("DELETE FROM students WHERE idno = $idno");
    }
}

?>