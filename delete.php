<?php 
 require_once "classes/Student.php";
$student = new Student();
$student->delete($_GET['idno']);
header('location: index.php');

?>