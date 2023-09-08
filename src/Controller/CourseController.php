<?php
require_once __DIR__ . '/../Database/DB.php';

class CourseController
{
    protected function connectDB()
    {
        $db = Database::connect();
        if ($db == null) {
            die("Falha na conexão com o banco de dados");
        }
        return $db;
    }

    public function getAllCoursesWithCategories()
    {
        try {
            $db = $this->connectDB();
            $query = $db->query("SELECT courses.course_id,courses.duration, courses.course_name, courses.start_date, courses.end_date, 
            coursecategories.category_name, coursecategories.description as category_description FROM courses LEFT JOIN 
            coursecategories ON courses.category_id = coursecategories.category_id");

            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Erro: ' . $e->getMessage());
        }
    }

    public function getCoursesByCategory($categoryId)
    {
        try {
            $db = $this->connectDB();
            $stmt = $db->prepare("SELECT courses.course_id, courses.course_name, courses.start_date, courses.end_date, 
            coursecategories.category_name, coursecategories.description as category_description FROM courses 
            JOIN coursecategories ON courses.category_id = coursecategories.category_id WHERE courses.category_id = :categoryId");

            $stmt->bindParam(':categoryId', $categoryId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Erro: ' . $e->getMessage());
        }
    }



    public function createCourse($courseName, $startDate, $endDate, $categoryId)
    {
        try {
            $db = $this->connectDB();
            $stmt = $db->prepare("INSERT INTO courses (course_name, start_date, end_date, category_id) VALUES (:courseName, :startDate, :endDate, :categoryId)");
            $stmt->bindParam(':courseName', $courseName, PDO::PARAM_STR);
            $stmt->bindParam(':startDate', $startDate, PDO::PARAM_STR); // Ajuste o tipo se necessário
            $stmt->bindParam(':endDate', $endDate, PDO::PARAM_STR); // Ajuste o tipo se necessário
            $stmt->bindParam(':categoryId', $categoryId, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
            return false;
        }
    }

    // Se necessário, adicione funções para manipular coursecategories aqui...
}
