<?php
require_once __DIR__ . '/../../Controller/StudentController.php'; 



// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <link rel="stylesheet" href="/dist/output.css">
</head>
<body>
    <h1>Edit Student</h1>
    <form action="" method="post"> 
        <!-- Hidden input for student ID -->
        <input type="hidden" name="student_id" value="<?php echo $student['id']; ?>">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $student['name']; ?>"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $student['email']; ?>"><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?php echo $student['address']; ?>"><br>

        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday" value="<?php echo $student['birthday']; ?>"><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
