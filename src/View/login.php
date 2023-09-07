<?php
session_start();
require_once '../Controller/AuthController.php';

$auth = new AuthController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($auth->loginUser($email, $password)) {
        header("Location: ../View/admin/admin_dashboard.php");
        exit();
    } else {
        $error = "Usuário ou senha inválidos";
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
        <h1 class="text-2xl font-semibold mb-4">Login</h1>
        <form action="login.php" method="post">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 w-full rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Senha</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 w-full rounded-md" required>
            </div>
            <div>
                <input type="submit" value="Entrar" class="w-full bg-blue-500 text-white p-2 rounded-md">
            </div>
            <?php if (!empty($error)) : ?>
                <div class="text-red-500 mt-2">
                    <p><?php echo $error; ?></p>
                </div>
            <?php endif; ?>
            <div class="mt-10 text-center">
                <p>Don't have an account? <a href="register.php" class="text-blue-500">Register Now</a></p>
            </div>
        </form>
    </div>
</body>


</html>