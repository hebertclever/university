<?php
require_once __DIR__ . '/../../Controller/AdminController.php'; 
require_once __DIR__ . '/../../View/admin/admin_dashboard.php'; 


if (!isset($_GET['id']) || empty($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID não fornecido ou é inválido.");
}

$id = intval($_GET['id']); 

var_dump($id);

$adminController = new AdminController();


if ($adminController->deleteUsers($id)) {
    header("Location: /../../View/admin/admin_dashboard.php");
    exit;
} else {
    die("Erro ao deletar o usuário.");
}
