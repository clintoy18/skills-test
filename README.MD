# Student Management System

## Overview
This is a simple web application for managing student records. It allows you to add, view, edit, and delete students using PHP and MySQL.

## How the Code Works

### 1. Database Connection (`db.php`)
- The `Database` class connects to the MySQL database using the provided credentials (host, username, password, database name).
- The `connect()` method creates a new MySQL connection and returns it.

### 2. Student Class (`Classes/Student.php`)
- The `Student` class contains methods to interact with the student data:
  - `getAll()`: Retrieves all students from the database.
  - `getById($idno)`: Retrieves a specific student by their ID.
  - `add($idno, $fname, $lname, $year_level)`: Inserts a new student into the database.
  - `update($idno, $fname, $lname, $year_level)`: Updates an existing student's information.
  - `delete($idno)`: Removes a student from the database.

### 3. Main Page (`index.php`)
- Displays a table of all students.
- Provides links to add, edit, or delete students.
- Uses the `Student` class to fetch and display student data.

### 4. Add Student (`addstudent.php`)
- Displays a form for adding a new student.
- On submission, it calls the `add()` method of the `Student` class to insert the new student into the database.

### 5. Edit Student (`editstudent.php`)
- Displays a form to edit an existing student's information.
- Loads the student's current data using the `getById()` method.
- On submission, it calls the `update()` method to save changes.

### 6. Delete Student (`delete.php`)
- Deletes a student by their ID using the `delete()` method.
- Redirects back to the main page after deletion.

## Visual Diagram

+------------------+ +------------------+ +------------------+
| | | | | |
| index.php |------>| addstudent.php |------>| editstudent.php |
| (View Students) | | (Add Student) | | (Edit Student) |
| | | | | |
+------------------+ +------------------+ +------------------+
| | |
v v v
+------------------+ +------------------+ +------------------+
| | | | | |
| Student Class |<------| Student Class |<------| Student Class |
| (CRUD Operations)| | (CRUD Operations)| | (CRUD Operations)|
| | | | | |
+------------------+ +------------------+ +------------------+
| | |
v v v
+------------------+ +------------------+ +------------------+
| | | | | |
| Database |<------| Database |<------| Database |
| (MySQL) | | (MySQL) | | (MySQL) |
| | | | | |
+------------------+ +------------------+ +------------------+