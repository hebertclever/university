<?php
require_once __DIR__ . '../../Controller/AuthController.php';

$auth = new AuthController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($auth->loginUser($email, $password)) {

        
               header("Location: ../../../index.php");
        exit();
    } else {
        $error = "Usuário ou senha inválidos";
    }
}

?>