<?php
require_once __DIR__ . '../../Model/loginAction.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body class="bg-gray-200 h-screen flex flex-col justify-center items-center">
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
        <div class="text-left mt-10">
            <div class="mb-4">
                <p class="text-gray-500">Admin: robertofeitosa@io.com</p>
                <p class="text-gray-500 mt-1">senha: 1234</p>
            </div>
            <div>
                <p class="text-gray-500">Teacher: john.smith1d@example.com</p>
                <p class="text-gray-500 mt-1">senha: 1234</p>
            </div>
        </div>

    </div>



</body>


</html>