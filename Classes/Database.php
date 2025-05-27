<?php

  class Database{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "studentmanagement";

    public $connection;

   public function connect(){
      $this->connection = new mysqli($this->hostname,$this->username, $this->password, $this->dbname);
      if($this->connection->connect_error){
         die("Connection Error". $this->connection->connect_error);
      }
      return $this->connection;

   }



  }



?>
