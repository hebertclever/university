<?php
//src/View/admin/dashboard.php
require_once __DIR__ . '../../../Controller/AdminController.php';
require_once __DIR__ . '../../../Controller/StudentController.php';

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

$users = $adminController->getUsersByPage($currentPage, $resultsPerPage);
$totalUsers = $adminController->getAllUsers();
$totalPages = ceil($totalUsers / $resultsPerPage);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d7477d78b2.js" crossorigin="anonymous"></script> 
</head>

<body class="flex">
    <nav>
        <?php include '../../View/components/sidebar.php'; ?>
    </nav>

    <nav>
        <?php include '../../View/components/menu.php'; ?>
        
    </nav>



    <!-- Students Table -->


    <div class="rounded-lg  p-6 w-screen h-screen flex flex-col">

        <div>
            <h1 class="text-2xl font-semibold mb-3">Students Lists</h1>
            <p>Welcome, Admin <?php echo $adminController->getAdminName(); ?></p> 

            <!-- Search Bar -->
            <input type="text" class="mb-4 p-2 w-64 border rounded" placeholder="Search Students">
        </div>



        <div>
            <select id="userTypeFilter">
                <option value="all">Todos</option>
                <option value="1">Admins</option>
                <option value="2">Teachers</option>
                <option value="3">Students</option>
            </select>
            <script>
                document.getElementById('userTypeFilter').addEventListener('change', function() {
                    location.href = "?user_type=" + this.value;
                });
            </script>
        </div>


        <div>
            <select id="resultsPerPage">
                <option value="10" <?= ($resultsPerPage == 10) ? 'selected' : '' ?>>10 por página</option>
                <option value="15" <?= ($resultsPerPage == 15) ? 'selected' : '' ?>>15 por página</option>
                <option value="25" <?= ($resultsPerPage == 25) ? 'selected' : '' ?>>25 por página</option>
                <option value="50" <?= ($resultsPerPage == 50) ? 'selected' : '' ?>>50 por página</option>
            </select>

            <script>
                document.getElementById('resultsPerPage').addEventListener('change', function() {
                    location.href = "?results_per_page=" + this.value;
                });
            </script>

        </div>



        <table class=" bg-white">
            <thead class="text-primaria border-none">

                <th class="py-2 px-4 border">#</th>
                <th class="py-2 px-4 border">DNI</th>
                <th class="py-2 px-4 border">Name</th>
                <th class="py-2 px-4 border">Email</th>
                <th class="py-2 px-4 border">Address</th>
                <th class="py-2 px-4 border">Birthday</th>
                <th class="py-2 px-4 border">Actions</th>

            </thead>
            <tbody class="bg-white rounded-lg">
                <?php
                $count = 1;
                foreach ($users as $users) { ?>
                    <tr class="space-y-2 ">
                        <td class="py-2 px-4">
                            <!-- <div class="absolute"><?= $count++; ?></div> -->
                            <!-- <div>
                            <img src="/serve_image.php?image_name=<?= $users['photo'] ?>" alt="Foto de perfil" width="40" height="40">
                            </div> -->
                        </td>
                        <td class="py-2 px-4 mb-64"><?= $users["id"]; ?></td>
                        <td class="py-2 px-4"><?= $users["name"]; ?></td>
                        <td class="py-2 px-4"><?= $users["email"]; ?></td>
                        <td class="py-2 px-4"><?= $users["address"]; ?></td>
                        <td class="py-2 px-4"><?= $users["birthday"]; ?></td>
                        <td class="py-2 px-4">
                            <a class="edit-button" href="../student/editStudent.php?id=<?= $users['id'] ?>">
                                <img src="/assets/user-edit.svg" alt="Editar">
                            </a>
                            <a href="deleteStudent.php?id=<?= $users['id'] ?>">
                                <img src="/assets/trash-02.svg" alt="Deletar">
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>


        <ul class="pagination">
            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                <li class="page-item <?= ($currentPage == $i) ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>
        </ul>


    </div>


    </div>
    </div>
    <div>
        <?php
        include '../../View/student/editStudent.php'
        ?>
    </div>

</body>


</html>