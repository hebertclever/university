<?php
require_once __DIR__ . '/../Controller/AdminController.php'; 



if (!isset($_GET['id']) || empty($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID não fornecido ou é inválido.");
}

$id = intval($_GET['id']); 


$adminController = new AdminController();


if ($adminController->deleteUsers($id)) {
    header("Location:/../../index.php");
    exit;
} else {
    die("Erro ao deletar o usuário.");
}
