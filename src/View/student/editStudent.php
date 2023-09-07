<?php
require_once __DIR__ . '/../../Controller/StudentController.php';
require_once __DIR__ . '/../../Controller/FileUpload.php';



if (isset($_GET['ajax']) && $_GET['ajax'] == 'true' && isset($_GET['id'])) {
    $studentId = $_GET['id'];
    $student = $studentController->getUserById($studentId);

    header('Content-Type: application/json');
    echo json_encode($student);
    exit();
}

$studentController = new StudentController();

$photo = null;
if (isset($_FILES['photo'])) {
    $photo = uploadFile($_FILES['photo']);
    if (
        $photo === "A imagem é muito grande (limite de 200KB)."
        || $photo === "Formato de arquivo não suportado."
        || $photo === "Ocorreu um erro ao carregar a imagem."
    ) {
        echo $photo;
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['student_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $birthday = $_POST['birthday'];

    $studentController->updateStudent($id, $name, $email, $address, $birthday, $photo);
}


if (isset($_GET['id'])) {
    $studentId = $_GET['id'];
} else {
    die;
}

$student = $studentController->getUserById($studentId);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <link rel="stylesheet" href="/dist/output.css">
</head>

<body class="bg-gray-100 flex items-center">

    <div class="container mx-auto flex p-6">

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