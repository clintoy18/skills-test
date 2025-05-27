<?php
 require_once "classes/Database.php";


 class Student{
    
    private $connection;

    public function __construct()
    {
      $database = new Database();
      $this->connection = $database->connect();
    }

    public function getAll(){
      return $this->connection->query("SELECT * FROM students");
    }

    public function getById($idno){
      return $this->connection->query("SELECT * FROM students WHERE idno = $idno");
    }
    
    public function add($idno, $firstname, $lastname, $year_level, $course){
      $stmt = $this->connection->prepare("INSERT INTO students(idno,firstname,lastname,year_level,course) VALUES(?,?,?,?,?)" );
      $stmt->bind_param("sssss",$idno, $firstname, $lastname, $year_level, $course );
      return $stmt->execute();  

    }

    public function delete($idno){
      return $this->connection->query("DELETE FROM students WHERE idno = $idno");
    }

    public function update($idno, $firstname, $lastname, $year_level, $course){
      $stmt = $this->connection->prepare("UPDATE students SET lastname = ? , firstname = ? , year_level = ?, course = ? WHERE idno = $idno");
      $stmt->bind_param("ssss",$firstname, $lastname, $year_level, $course);
       return $stmt->execute();  

    }

 }

?>