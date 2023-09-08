<?php
require_once __DIR__ . '/../Controller/CourseController.php';



$courseController = new CourseController();
$courses = $courseController->getAllCoursesWithCategories();
$description = $coursesWithCategories[0]['description'] ?? null;  

if (!is_array($courses)) {
    die('Erro: A variável courses não é um array.');
}



?>