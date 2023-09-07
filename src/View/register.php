<?php
require_once '../Controller/AuthController.php';

$auth = new AuthController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $auth->registerUser($email, $password);
    if ($result === true) {
        header('Location: personal_info.php');
    } else {
        $error = $result; // "E-mail já existe."
    }
}



?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body class="bg-gray-200 h-screen flex justify-center items-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-semibold mb-4">Cadastro</h1>
        <form action="register.php" method="post">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Nome</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 w-full rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 w-full rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Senha</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 w-full rounded-md" required>
            </div>
            <div>
                <input type="submit" value="Cadastrar" class="w-full bg-blue-500 text-white p-2 rounded-md">
            </div>
        </form>
        <div class="mt-4 text-center">
            <p>Já tem uma conta? <a href="login.php" class="text-blue-500">Login</a></p>
        </div>
    </div>
</body>



</html>