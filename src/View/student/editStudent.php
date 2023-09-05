<?php
require_once __DIR__ . '/../../Controller/StudentController.php'; 

$studentController = new StudentController();  
$students = $studentController->getAllStudents();

//var_dump($students);

$studentIds = array_column($students, 'id');
$student = null;

var_dump($_GET['id']);  
var_dump((int)$_GET['id']); 

if (isset($_GET['id']) && in_array((int)$_GET['id'], $studentIds, true)) {
    $studentId = (int)$_GET['id']; 
    
    foreach ($students as $stu) {
        if ($stu['id'] == $studentId) {
            $student = $stu;
            break;
        }
    }
} else {
    echo "ID do estudante inválido ou não fornecido";
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $birthday = $_POST['birthday'];
    // $photo = '';  

    $result = $studentController->updateStudent($id = null, $name, $email, $address, $birthday);

    if ($result) {
        echo "Atualizado com sucesso!";
    } else {
        echo "Falha na atualização";
    }
}

?>

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
