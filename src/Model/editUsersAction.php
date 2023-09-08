<?php
require_once __DIR__ . '/../Controller/StudentController.php';
require_once __DIR__ . '/../Controller/FileUpload.php';
require_once __DIR__ . '/../Controller/AuthController.php';


$authController = new AuthController();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['new_password'])) {
    $email = $_POST['email'];
    $newPassword = $_POST['new_password'];
    $result = $authController->changePassword($email, $newPassword);

    if ($result === true) {
        $message = "Senha atualizada com sucesso!";
    } else {
        $message = $result;
    }
}


if (isset($_GET['ajax']) && $_GET['ajax'] == 'true' && isset($_GET['id'])) {
    $studentId = $_GET['id'];
    $student = $studentController->getUserById($studentId);

    header('Content-Type: application/json');
    echo json_encode($student);
    exit();
}

$studentController = new StudentController();

$photo = null;
if (isset($_FILES['photo'])) {
    $photo = uploadFile($_FILES['photo']);
    if (
        $photo === "A imagem é muito grande (limite de 200KB)."
        || $photo === "Formato de arquivo não suportado."
        || $photo === "Ocorreu um erro ao carregar a imagem."
    ) {
        echo $photo;
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['student_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $birthday = $_POST['birthday'];

    $studentController->updateStudent($id, $name, $email, $address, $birthday, $photo);
}


if (isset($_GET['id'])) {
    $studentId = $_GET['id'];
} else {
    die;
}

$student = $studentController->getUserById($studentId);
?>