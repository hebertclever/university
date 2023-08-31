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
            <h1 class="text-2xl font-semibold mb-3">Admin Dashboard</h1>

            <!-- Teachers Table -->
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <h2 class="text-xl font-semibold mb-2">Teachers</h2>
                <input type="text" class="mb-4 p-2 border rounded" placeholder="Filter Teachers">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border">ID</th>
                            <th class="py-2 px-4 border">Name</th>
                            <th class="py-2 px-4 border">Email</th>
                            <th class="py-2 px-4 border">Qualifications</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($teachers as $teacher): ?>
                        <tr>
                            <td class="py-2 px-4 border"><?= $teacher->UserID; ?></td>
                            <td class="py-2 px-4 border"><?= $teacher->UserName; ?></td>
                            <td class="py-2 px-4 border"><?= $teacher->Email; ?></td>
                            <td class="py-2 px-4 border"><?= $teacher->Qualifications; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Students Table -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-semibold mb-2">Students</h2>
                <input type="text" class="mb-4 p-2 border rounded" placeholder="Filter Students">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border">ID</th>
                            <th class="py-2 px-4 border">Name</th>
                            <th class="py-2 px-4 border">Email</th>
                            <th class="py-2 px-4 border">Grade Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($students as $student): ?>
                        <tr>
                            <td class="py-2 px-4 border"><?= $student->UserID; ?></td>
                            <td class="py-2 px-4 border"><?= $student->UserName; ?></td>
                            <td class="py-2 px-4 border"><?= $student->Email; ?></td>
                            <td class="py-2 px-4 border"><?= $student->GradeLevel; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>
</html>
