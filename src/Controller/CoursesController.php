<?php
class CourseController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function listCourses() {
        $currentPage = $_GET['page'] ?? 1;
        $paginator = new Paginator($this->db, "Courses", 10, $currentPage);
        
        $courses = $paginator->getData();
        $totalPages = $paginator->getTotalPages();
        
        $courses = iterator_to_array($courses);
        $totalPages = $totalPages;
        $currentPage = $currentPage;
        
        include "../../src/View/admin/dashboard.php";
    }
}
