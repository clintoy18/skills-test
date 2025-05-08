<?php 
require_once "classes/Student.php";
$student = new Student();



    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $student->add($_POST['idno'],$_POST['fname'],$_POST['lname'],$_POST['year_level']);
        header('location: index.php');
    }
?>

<form method="POST">
    <label for="idno">IDNO</label>
    <input type="text" name="idno">
    <label for="fname">First Name</label>
    <input type="text" name="fname">
    <label for="lname">Last Name</label>
    <input type="text" name="lname">
    <label for="year_level">year level</label>
    <select name="year_level" id="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <button type="submit">submit</button>
</form>