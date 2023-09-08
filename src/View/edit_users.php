<?php
require_once __DIR__ . '/../Model/editUsersAction.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Users</title>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body class="bg-gray-100 flex  items-center">
    <nav>
        <?php include '../View/sidebar.php'; ?>
    </nav>


    <div class="container mx-auto flex p-6">
        <div class="flex m-7">
            <a href="/src/view/users_list.php" class="flex items-center hover:text-blue-500">
                <i class="fas fa-arrow-left mr-2"></i>
                <h2 class="text-lg font-bold">Back</h2>
            </a>
        </div>

        <!-- Student Data Card -->
        <div class="w-1/2 bg-white p-8 rounded-lg shadow-md">
            <img src="<?php echo $student['photo']; ?>" alt="Student Photo" class="mx-auto rounded-lg w-64 h-64 object-cover mb-6 shadow-sm">
            <h1 class="text-2xl font-semibold mb-2"><?php echo $student['name']; ?></h1>
            <p class="text-sm mb-2"><strong>Email:</strong> <?php echo $student['email']; ?></p>
            <p class="text-sm mb-2"><strong>Address:</strong> <?php echo $student['address']; ?></p>
            <p class="text-sm mb-2"><strong>Birthday:</strong> <?php echo $student['birthday']; ?></p>
        </div>

        <!-- Edit Form -->
        <div class="w-1/2 bg-white p-8 rounded-lg shadow-md ml-4">
            <h1 class="text-2xl font-semibold mb-4">Edit Student</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="student_id" value="<?php echo $student['id']; ?>">
                <div class="mb-4">
                    <label for="name" class="text-sm font-medium text-gray-600 block">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $student['name']; ?>" class="w-full p-2 border rounded mt-1">
                </div>
                <div class="mb-4">
                    <label for="email" class="text-sm font-medium text-gray-600 block">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $student['email']; ?>" class="w-full p-2 border rounded mt-1">
                </div>
                <div class="mb-4">
                    <label for="address" class="text-sm font-medium text-gray-600 block">Address:</label>
                    <input type="text" id="address" name="address" value="<?php echo $student['address']; ?>" class="w-full p-2 border rounded mt-1">
                </div>
                <div class="mb-4">
                    <label for="birthday" class="text-sm font-medium text-gray-600 block">Birthday:</label>
                    <input type="date" id="birthday" name="birthday" value="<?php echo $student['birthday']; ?>" class="w-full p-2 border rounded mt-1">
                </div>                
                <div class="mb-4">
                    <label for="new_password" class="text-sm font-medium text-gray-600 block">Nova Senha:</label>
                    <input type="password" id="new_password" name="new_password" class="w-full p-2 border rounded mt-1">
                </div>
                <div class="mb-4">
                    <label for="photo" class="text-sm font-medium text-gray-600 block">Photo:</label>
                    <input type="file" id="photo" name="photo" class="w-full p-2 border rounded mt-1">
                </div>

                <div>
                    <input type="submit" value="Update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                </div>
            </form>
        </div>

    </div>

</body>


</html>