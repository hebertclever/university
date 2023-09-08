<?php
require_once __DIR__ . '/../Controller/AdminController.php';
require_once __DIR__ . '/../Controller/StudentController.php';

function getUserTypeName($userType)
{
    switch ($userType) {
        case '1':
            return "Admins";
        case '2':
            return "Teachers";
        case '3':
            return "Students";
        default:
            return "Users";
    }
}


$adminController = new AdminController();

$userType = $_GET['user_type'] ?? 'all';

switch ($userType) {
    case '1':
        $users = $adminController->getAllAdmins();
        break;
    case '2':
        $users = $adminController->getAllTeachers();
        break;
    case '3':
        $users = $adminController->getAllStudents();
        break;
    default:
        $users = $adminController->getAllUsers();
        break;
}

$resultsPerPage = $_GET['results_per_page'] ?? 15;
$currentPage = $_GET['page'] ?? 1;

$searchTerm = $_GET['search'] ?? '';
$users = $adminController->getUsersByPage($currentPage, $userType, $resultsPerPage, $searchTerm);
$totalUsers = $adminController->getAllUsers($userType);
$totalPages = ceil($totalUsers / $resultsPerPage);


?>