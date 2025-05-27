<?php 

require_once "classes/Student.php";
$student = new Student();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $student->add($_POST['idno'],$_POST['firstname'],$_POST['lastname'],$_POST['year_level'],$_POST['course']);
        header('location: index.php');
    }
?>

<form method="POST">
    <label for="idno">IDNO</label>
    <input type="text" name="idno"><br>
    <label for="firstname">First Name</label>
    <input type="text" name="firstname"><br>
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname"><br>
    <label for="year_level">year level</label>
    <select name="year_level" id="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select><br>
     <label for="course">Course</label>
    <select name="course" id="">
        <option value="BSIT">BSIT</option>
        <option value="BSCS">BSCS</option>
     
    </select><br>
    <button type="submit">submit</button>
</form>