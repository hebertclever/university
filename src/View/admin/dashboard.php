<?php
//src/View/admin/dashboard.php
require_once '../../Controller/AdminController.php';

$adminController = new AdminController();
$teachers = $adminController->getAllTeachers();
$students = $adminController->getAllStudents();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d7477d78b2.js" crossorigin="anonymous"></script> <!-- FontAwesome -->
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-500 text-white h-screen">
            <div class="p-4 text-xl font-semibold">Dashboard Admin</div>
            <nav>
                <a href="#" class="block px-4 py-2 hover:bg-blue-400">Home</a>
                <a href="#" class="block px-4 py-2 hover:bg-blue-400">Teachers</a>
                <a href="#" class="block px-4 py-2 hover:bg-blue-400">Students</a>
                <a href="#" class="block px-4 py-2 hover:bg-blue-400">Courses</a>
            </nav>
        </div>

        <!-- Content -->
        <div class="flex-1 p-6">
            <div class="breadcrumb">Home/Students</div>  <!-- Breadcumb -->
            <h1 class="text-2xl font-semibold mb-3">Students Lists</h1>
            <p>Welcome, Admin <?php echo $adminController->getAdminName(); ?></p>  <!-- Dynamic admin name -->
            
            <!-- Search Bar -->
            <input type="text" class="mb-4 p-2 border rounded" placeholder="Search Students">
            
            <!-- Students Table -->
            <div class="bg-white rounded-lg shadow p-6">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border">#</th>
                            <th class="py-2 px-4 border">DNI</th>
                            <th class="py-2 px-4 border">Name</th>
                            <th class="py-2 px-4 border">Email</th>
                            <th class="py-2 px-4 border">Address</th>
                            <th class="py-2 px-4 border">Birthday</th>
                            <th class="py-2 px-4 border">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $count = 1;
                        foreach ($students as $student) { ?>
                            <tr>
                                <td class="py-2 px-4 border"><?= $count++; ?></td>
                                <td class="py-2 px-4 border"><?= $student["Name"]; ?></td>
                                <td class="py-2 px-4 border"><?= $student["Name"]; ?></td>
                                <td class="py-2 px-4 border"><?= $student["Email"]; ?></td>
                                <td class="py-2 px-4 border"><?= $student["UserName"]; ?></td>
                                <td class="py-2 px-4 border"><?= $student["UserID"]; ?></td>
                                <td class="py-2 px-4 border">
                                <img src="/assets/user-edit.svg" alt="Editar">
                                <img src="/assets/trash-02.svg" alt="Editar">                                    
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- Pagination and display controls can go here -->
            </div>

        </div>
    </div>
</body>
</html>
