<?php
require_once __DIR__ . '/UserController.php';

class AdminController extends UserController
{
  public function getAllTeachers()
  {
    try {
      $db = $this->connectDB();
      $query = $db->query("SELECT * FROM users WHERE roleId = 2");
      return $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die('Erro: ' . $e->getMessage());
    }
  }

  public function getAllStudents()
  {
    try {
      $db = $this->connectDB();
      $query = $db->query("SELECT * FROM users WHERE roleId = 3");
      return $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die('Erro: ' . $e->getMessage());
    }
  }

  public function deleteStudent($id)
  {
    try {
      $db = $this->connectDB();
      $query = $db->query("DELETE FROM users WHERE id = $id");
    } catch (Exception $e) {
      die('Erro: ' . $e->getMessage());
    }
  }
  public function getAdminName()
{
  
  return "SeuNome";
}

}
