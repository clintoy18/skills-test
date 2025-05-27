<?php 

require_once "classes/Student.php";

$student = new Student();  //creates new student object
$students = $student->getAll();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Students</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table border = "1" id="table">   

        <div class="button-container">
        <a href="addstudent.php" class="add-button">Add Student</a>
        </div>
      
         <tr id="table-header">
            <th>IDNO</th>
            <th>LASTNAME</th>
            <th>FIRSTNAME</th>
            <th>YEAR_LEVEL</th>
            <th>COURSE</th>
            <th>ACTIONS</th>
         </tr>
         <?php while($row = $students->fetch_assoc()){ 
            echo "
                <tr class='table-cells'> 
                   <td>{$row['idno']}</td>
                   <td>{$row['firstname']}</td>
                   <td>{$row['lastname']}</td>
                   <td>{$row['year_level']}</td>
                   <td>{$row['course']}</td>
                   <td>
                     <a class='button1' href='delete.php?idno={$row['idno']}'>Delete</a>
                     <a class='button2' href='editstudent.php?idno={$row['idno']}'>Edit</a>
                    </td>
                </tr> "
                ; 
                
             }
     
         ?>    
    </table>
</body>
</html>

