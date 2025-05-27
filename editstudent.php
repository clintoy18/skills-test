<?php 
require_once "classes/Student.php";
$student = new Student();
$data = $student->getById($_GET['idno'])->fetch_assoc();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $student->update($_POST['idno'],$_POST['firstname'],$_POST['lastname'],$_POST['year_level'],$_POST['course']);
        header('location: index.php');
    }
?>

<form method="post">
  <h2>Edit Student</h2>
  
  ID Number: <input type="text" name="idno" value="<?= htmlspecialchars($data['idno']) ?>" readonly><br>
  
  First Name: <input type="text" name="firstname" value="<?= htmlspecialchars($data['firstname']) ?>"><br>
  
  Last Name: <input type="text" name="lastname" value="<?= htmlspecialchars($data['lastname']) ?>"><br>
  
  Year Level: <select name="year_level">
                <option value="1" <?= $data['year_level'] == '1' ? 'selected' : '' ?>>1</option>
                <option value="2" <?= $data['year_level'] == '2' ? 'selected' : '' ?>>2</option>
                <option value="3" <?= $data['year_level'] == '3' ? 'selected' : '' ?>>3</option>
                <option value="4" <?= $data['year_level'] == '4' ? 'selected' : '' ?>>4</option>   
              </select><br> 
  Course:
              <select name="course">
                <option value="BSCS" <?= $data['course'] == 'BSCS' ? 'selected' : '' ?>>BSCS</option>
                <option value="BSIT" <?= $data['course'] == 'BSIT' ? 'selected' : '' ?>>BSIT</option>
              </select><br>
  
  <input type="submit" value="Update">
</form>