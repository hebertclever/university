<?php
//src/View/admin/dashboard.php
require_once __DIR__ . '../../../Controller/AdminController.php';
require_once __DIR__ . '../../../Controller/StudentController.php';





$adminController = new AdminController();
$teachers = $adminController->getAllTeachers();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d7477d78b2.js" crossorigin="anonymous"></script> <!-- FontAwesome -->
</head>

<body class="flex">
    <nav>
        <?php include '../../View/components/sidebar.php'; ?>
    </nav>

    <nav>
        <?php include '../../View/components/menu.php'; ?>
        <ul class="pagination">
            <?php
            $totalPages = $totalPages ?? 1;
            ?>
            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                <li class="page-item <?= ($currentPage == $i) ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>
        </ul>
        <select id="numPerPage">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
        </select>

        <script>
            document.getElementById('numPerPage').addEventListener('change', function() {
                location.href = "?num_per_page=" + this.value;
            });
        </script>

    </nav>


    <!-- Students Table -->


    <div class="rounded-lg  p-6 w-screen h-screen flex flex-col">

        <h1 class="text-2xl font-semibold mb-3">Students Lists</h1>
        <p>Welcome, Admin <?php echo $adminController->getAdminName(); ?></p> <!-- Dynamic admin name -->

        <!-- Search Bar -->
        <input type="text" class="mb-4 p-2 w-64 border rounded" placeholder="Search Students">

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
                foreach ($students as $student) { ?>
                    <tr class="space-y-2 ">
                        <td class="py-2 px-4">
                            <!-- <div class="absolute"><?= $count++; ?></div> -->
                            <!-- <div>
                            <img src="/serve_image.php?image_name=<?= $student['photo'] ?>" alt="Foto de perfil" width="40" height="40">
                            </div> -->
                        </td>
                        <td class="py-2 px-4 mb-64"><?= $student["id"]; ?></td>
                        <td class="py-2 px-4"><?= $student["name"]; ?></td>
                        <td class="py-2 px-4"><?= $student["email"]; ?></td>
                        <td class="py-2 px-4"><?= $student["address"]; ?></td>
                        <td class="py-2 px-4"><?= $student["birthday"]; ?></td>
                        <td class="py-2 px-4">
                            <a class="edit-button" href="../student/editStudent.php?id=<?= $student['id'] ?>">
                                <img src="/assets/user-edit.svg" alt="Editar">
                            </a>
                            <a href="deleteStudent.php?id=<?= $student['id'] ?>">
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