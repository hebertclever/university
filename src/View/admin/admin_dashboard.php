<?php

require_once __DIR__ . '../../../Controller/AdminController.php';
require_once __DIR__ . '../../../Controller/StudentController.php';

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

   


    <!-- Students Table -->


    <div class="rounded-lg  p-6 w-screen  h-screen flex flex-col">

        <div>
            <h1 class="text-2xl font-semibold mb-3"><?php echo getUserTypeName($userType); ?> Lists</h1>
            <p>
                Welcome,
                <?php
                if (isset($_SESSION['user_name']) && isset($_SESSION['user_role'])) {
                    echo $_SESSION['user_name'] . " (" . $_SESSION['user_role'] . ")";
                }
                ?>
            </p>


            <!-- Search Bar -->
            <div class="flex items-center mb-2">
                <input type="text" id="searchInput" class="p-2 w-64  border rounded" placeholder="Search Users">
                <button id="searchButton" class="ml-2 bg-blue-500 text-white p-2 rounded">Buscar</button>
            </div>

            <script>
                let searchTimeout;

                document.getElementById('searchInput').addEventListener('input', function() {
                    clearTimeout(searchTimeout);
                    searchTimeout = setTimeout(updateSearch, 1000);
                });

                document.getElementById('searchButton').addEventListener('click', function() {
                    clearTimeout(searchTimeout); 
                    updateSearch();
                });

                function updateSearch() {
                    const searchTerm = document.getElementById('searchInput').value;
                    location.href = "?search=" + searchTerm + "&user_type=" + document.getElementById('userTypeFilter').value;
                }
            </script>

        </div>






        <div class="mb-4" style="text-align: right;">
            <div class="inline-block mr-4">
                <select id="userTypeFilter" class="bg-white border rounded-md p-2 shadow">
                    <option value="all" <?= ($userType == 'all') ? 'selected' : '' ?>>All Users</option>
                    <option value="1" <?= ($userType == '1') ? 'selected' : '' ?>>Admins</option>
                    <option value="2" <?= ($userType == '2') ? 'selected' : '' ?>>Teachers</option>
                    <option value="3" <?= ($userType == '3') ? 'selected' : '' ?>>Students</option>
                </select>

                <script>
                    document.getElementById('userTypeFilter').addEventListener('change', function() {
                        location.href = "?user_type=" + this.value;
                    });
                </script>
            </div>

            <div class="inline-block">
                <select id="resultsPerPage" class="bg-white border rounded-md p-2 shadow">
                    <option value="10" <?= ($resultsPerPage == 10) ? 'selected' : '' ?>>10 per page</option>
                    <option value="15" <?= ($resultsPerPage == 15) ? 'selected' : '' ?>>15 per page</option>
                    <option value="25" <?= ($resultsPerPage == 25) ? 'selected' : '' ?>>25 per page</option>
                    <option value="50" <?= ($resultsPerPage == 50) ? 'selected' : '' ?>>50 per page</option>
                </select>
                <script>
                    document.getElementById('resultsPerPage').addEventListener('change', function() {
                        location.href = "?results_per_page=" + this.value;
                    });
                </script>
            </div>
        </div>




        <table class="bg-white mb-4">
            <thead class="text-primaria border-none">
                <th class="py-2 px-4 border text-left">#</th>
                <th class="py-2 px-4 border text-left">DNI</th>
                <th class="py-2 px-4 border text-left">Name</th>
                <th class="py-2 px-4 border text-left">Email</th>
                <th class="py-2 px-4 border text-left">Address</th>
                <th class="py-2 px-4 border text-left">Birthday</th>
                <th class="py-2 px-4 border text-left">Actions</th>
            </thead>
            <tbody class="bg-white rounded-lg">
                <?php
                $count = 1;
                foreach ($users as $user) { ?>
                    <tr class="space-y-2">
                        <td class="py-2 px-4"><?= $count++; ?></td>
                        <td class="py-2 px-4 mb-64"><?= $user["id"]; ?></td>
                        <td class="py-2 px-4"><?= $user["name"]; ?></td>
                        <td class="py-2 px-4"><?= $user["email"]; ?></td>
                        <td class="py-2 px-4"><?= $user["address"]; ?></td>
                        <td class="py-2 px-4"><?= $user["birthday"]; ?></td>
                        <td class="py-2 px-4 flex space-x-2">
                            <a class="edit-button" href="../student/editUsers.php?id=<?= $user['id'] ?>">
                                <img src="/assets/user-edit.svg" alt="Editar">
                            </a>
                            <a href="../../Controller/actions/deleteUsers.php?id=<?= $user['id'] ?>">
                                <img src="/assets/trash-02.svg" alt="Deletar">
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>



        <div class="flex justify-end mt-4">
            <!-- Pagination -->
            <ul class="pagination flex space-x-2">
                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>

                    <li class="page-item">
                        <a class="page-link text-lg px-4 py-2 border rounded-md transition duration-150 <?= ($currentPage == $i) ? 'bg-blue-500 text-white' : 'bg-white hover:bg-gray-200' ?>" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>




    </div>


    </div>
    </div>
   

</body>


</html>