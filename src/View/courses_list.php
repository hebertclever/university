<?php
require_once __DIR__ . '../../Model/courseListsActions.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Course List</title>
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d7477d78b2.js" crossorigin="anonymous"></script>
</head>

<body class="flex">
    <nav>
        <?php include __DIR__ . '/sidebar.php'; ?>
    </nav>

    <div class="rounded-lg p-6 w-screen h-screen flex flex-col">
        <!-- Heading Section -->
        <div>
            <h1 class="text-2xl font-semibold mb-3">Course Lists</h1>
            <p>
                Welcome,
                <?php
                if (isset($_SESSION['user_name'])) {
                    echo $_SESSION['user_name'];
                }
                ?>
            </p>

            <!-- Search and Display Mode Options -->
            <div class="flex items-center mb-2">
                <input type="text" id="searchInput" class="p-2 w-64 border rounded" placeholder="Search Courses">
                <button id="searchButton" class="ml-2 bg-blue-500 text-white p-2 rounded">Buscar</button>
                <div class="ml-auto flex items-center">
                    <button id="displayCards" class="mr-2"><i class="fas fa-th-large"></i></button>
                    <button id="displayTable"><i class="fas fa-list"></i></button>
                </div>
            </div>
        </div>

        <!-- Course Cards View -->
        <div id="cardView" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php foreach ($courses as $course) : ?>
                <div class="bg-white p-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-3"><?= $course['course_name']; ?></h2>
                    <p class="mb-2"><?= $course['   ']; ?></p>
                    <div class="flex justify-between">
                        <span><?= $course['duration']; ?> hours</span>
                        <div class="flex space-x-2">
                            <!-- Edit and Delete Actions for courses -->
                            <a href="/path_to_edit?course_id=<?= $course['id']; ?>" class="text-blue-500"><i class="fas fa-edit"></i></a>
                            <a href="/path_to_delete?course_id=<?= $course['id']; ?>" class="text-red-500"><i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Course Table View -->
        <div id="tableView" class="hidden">
            <table class="bg-white mb-4 w-full">
                <!-- Table headings -->
                <thead>
                    <tr>
                        <th class="py-2 px-4 border">#</th>
                        <th class="py-2 px-4 border">Course Name</th>
                        <th class="py-2 px-4 border">Description</th>
                        <th class="py-2 px-4 border">Duration</th>
                        <th class="py-2 px-4 border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    foreach ($courses as $course) : ?>
                        <tr>
                            <td class="py-2 px-4"><?= $count++; ?></td>
                            <td class="py-2 px-4"><?= $course['name']; ?></td>
                            <td class="py-2 px-4"><?= $course['description']; ?></td>
                            <td class="py-2 px-4"><?= $course['duration']; ?> hours</td>
                            <td class="py-2 px-4 flex space-x-2">
                                <!-- Edit and Delete Actions for courses -->
                                <a href="/path_to_edit?course_id=<?= $course['id']; ?>" class="text-blue-500"><i class="fas fa-edit"></i></a>
                                <a href="/path_to_delete?course_id=<?= $course['id']; ?>" class="text-red-500"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Scripts to toggle between card and table views -->
        <script>
            document.getElementById('displayCards').addEventListener('click', function() {
                document.getElementById('cardView').classList.remove('hidden');
                document.getElementById('tableView').classList.add('hidden');
            });

            document.getElementById('displayTable').addEventListener('click', function() {
                document.getElementById('cardView').classList.add('hidden');
                document.getElementById('tableView').classList.remove('hidden');
            });
        </script>
    </div>
</body>

</html>
