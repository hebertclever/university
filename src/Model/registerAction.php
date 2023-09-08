<?php
require_once '../Controller/AuthController.php';

$auth = new AuthController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $auth->registerUser($email, $password);
    if ($result === true) {
        header('Location: ../../index.php');
    } else {
        $error = $result; // "E-mail já existe."
    }
}


?>