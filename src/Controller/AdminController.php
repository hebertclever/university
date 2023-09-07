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

  public function getAllUsers($userType = 'all')
  {
    try {
      $db = $this->connectDB();

      if ($userType === 'all') {
        $query = $db->query("SELECT COUNT(*) as count FROM users");
      } else {
        $stmt = $db->prepare("SELECT COUNT(*) as count FROM users WHERE roleId = :userType");
        $stmt->bindParam(':userType', $userType, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['count'];
      }

      $result = $query->fetch(PDO::FETCH_ASSOC);
      return $result['count'];
    } catch (Exception $e) {
      die('Erro: ' . $e->getMessage());
    }
  }


  public function getUsersByPage($page, $userType = 'all', $resultsPerPage = 10, $searchTerm = '')
  {
    $start = ($page - 1) * $resultsPerPage;
    try {
      $db = $this->connectDB();

      $userTypeCondition = '';
      if ($userType != 'all') {
        $userTypeCondition = ' AND roleId = :userType ';
      }

      if ($searchTerm) {
        $searchTerm = '%' . $searchTerm . '%';
        $query = $db->prepare("SELECT * FROM users WHERE name LIKE :searchTerm $userTypeCondition LIMIT :start, :limit");
        $query->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
      } else {
        $query = $db->prepare("SELECT * FROM users WHERE 1 = 1 $userTypeCondition LIMIT :start, :limit");
      }

      if ($userType != 'all') {
        $query->bindParam(':userType', $userType, PDO::PARAM_STR);
      }

      $query->bindParam(':start', $start, PDO::PARAM_INT);
      $query->bindParam(':limit', $resultsPerPage, PDO::PARAM_INT);
      $query->execute();
      return $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die('Erro: ' . $e->getMessage());
    }
  }





  public function deleteUsers($id)
{
    try {
        $db = $this->connectDB();
        $stmt = $db->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return true;  // Retorna verdadeiro se a operação foi bem-sucedida
    } catch (Exception $e) {
        return false; // Retorna falso em caso de erro
    }
}

}
