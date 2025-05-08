<?php 
require_once "classes/Student.php";
$student = new Student();
$students =$student->getAll();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of students</title>
</head>
<body> 
    <a href="addstudent.php">Add Student</a>
    <table border ="1" cellpadding = "10" >
        <tr>
            <th>IDNO</th>
            <th>LAST NAME</th>
            <th>FIRS TNAME</th>
            <th>YEARL EVEL</th>
        </tr>
        <?php while($row = $students->fetch_assoc()){
                echo"  <tr>
                            <td>{$row['idno']}</td>
                            <td>{$row['fname']}</td>
                            <td>{$row['lname']}</td>
                            <td>{$row['year_level']}</td>
                        </tr>";
              }
        
        ?>
    </table>
    
</body>
</html>