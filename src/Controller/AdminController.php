<?php
//Em src/Controller/AdminController.php
require_once __DIR__ . '/../Model/User.php';
require_once __DIR__ . '/../Model/Teacher.php';
require_once __DIR__ . '/../Model/Student.php';
require_once __DIR__ . '/../Database/DB.php';

class AdminController {
  public function getAllTeachers() {
    try {
      $db = Database::connect();
      if($db == null) {
        die("Falha na conexão com o banco de dados");
      }
      // $query = $db->prepare("SELECT * FROM users WHERE RoleID = 2");
      // $query->execute();
      $query = $db->query("SELECT * FROM users WHERE RoleID = 2");
      // $teachers = $query->fetchAll(PDO::FETCH_CLASS, 'Teacher');
      $teachers = $query->fetchAll(PDO::FETCH_ASSOC);
      // var_dump($teachers); 
      return $teachers;
    } catch (Exception $e) {
      die('Erro: ' . $e->getMessage());
    }
  }

  public function getAllStudents() {
    try {
      $db = Database::connect();
      if($db == null) {
        die("Falha na conexão com o banco de dados");
      }
      $query = $db->prepare("SELECT * FROM users WHERE RoleID = 3");
      $query->execute();
      $students = $query->fetchAll(PDO::FETCH_ASSOC);
      // var_dump($students);  
      return $students;
    } catch (Exception $e) {
      die('Erro: ' . $e->getMessage());
    }
  }
}
