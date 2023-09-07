<?php
require_once __DIR__ . '/UserController.php';

class AdminController extends UserController
{
  public function getAllAdmins()
  {
    try {
      $db = $this->connectDB();
      $query = $db->query("SELECT * FROM users WHERE roleId = 1"); 
      return $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die('Erro: ' . $e->getMessage());
    }
  }

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

  public function getAllUsers()
  {
    try {
      $db = $this->connectDB();
      $query = $db->query("SELECT COUNT(*) as count FROM users");
      $result = $query->fetch(PDO::FETCH_ASSOC);
      return $result['count'];
    } catch (Exception $e) {
      die('Erro: ' . $e->getMessage());
    }
  }

  public function getUsersByPage($page, $resultsPerPage = 15)
  {
    $start = ($page - 1) * $resultsPerPage;

    try {
      $db = $this->connectDB();
      $query = $db->prepare("SELECT * FROM users LIMIT :start, :limit");
      $query->bindParam(':start', $start, PDO::PARAM_INT);
      $query->bindParam(':limit', $resultsPerPage, PDO::PARAM_INT);
      $query->execute();
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
