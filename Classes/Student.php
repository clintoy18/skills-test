<?php
require_once 'db.php';

class Student{

    private $connection;

    public function __construct(){
        $database = new Database();
        $this->connection = $database->connect();
    }
    
    public function getAll(){
       return $this->connection->query("SELECT * FROM studentinfo");
    }
    public function getById($idno){
        return $this->connection->query("SELECT * FROM studentinfo WHERE idno = $idno")->fetch_assoc();
    }
        
    public function Add($idno,$fname,$lname,$year_level){
        $stmt = $this->connection->prepare("INSERT INTO studentinfo(idno, fname,lname,year_level) VALUES(?,?,?,?)");
        $stmt->bind_param("ssss",$idno,$fname,$lname,$year_level);
        return $stmt->execute();
    }
    public function update($idno, $fname,$lname,$year_level){
        $stmt = $this->connection->prepare("UPDATE studentinfo SET idno = ? , fname = ? ,lname = ?,year_level = ?");
        $stmt->bind_param("sss",$fname,$lname,$year_level,$idno);
        return $stmt->execute();
    }
   public function delete($idno){
    return $this->connection->query("DELETE FROM studentinfo WHERE idno = $idno");
   }
    
}
?>