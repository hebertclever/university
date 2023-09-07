<?php
require_once __DIR__ . '/../Database/DB.php';

class UserController
{
  protected function connectDB()
  {
    $db = Database::connect();
    if ($db == null) {
      die("Falha na conexão com o banco de dados");
    }
    return $db;
  }

  public function getUserById($id)
  {
    try {
      $db = $this->connectDB();
      $stmt = $db->prepare("SELECT * FROM users WHERE id = :id");
      $stmt->bindParam(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die('Erro: ' . $e->getMessage());
    }
  }


  public function updateUser($id, $name, $email, $address, $birthday, $photo)
  {
    try {
      $db = $this->connectDB();
      $query = $db->prepare("UPDATE users SET name = :name, email = :email, address = :address, birthday = :birthday, photo = :photo WHERE id = :id");
      $query->bindParam(':name', $name, PDO::PARAM_STR);
      $query->bindParam(':email', $email, PDO::PARAM_STR);
      $query->bindParam(':address', $address, PDO::PARAM_STR);
      $query->bindParam(':birthday', $birthday, PDO::PARAM_STR);
      $query->bindParam(':photo', $photo, PDO::PARAM_STR);
      $query->bindParam(':id', $id, PDO::PARAM_INT);
      $query->execute();

      return true;
    } catch (PDOException $e) {
      // Tratar o erro aqui
      echo "Erro: " . $e->getMessage();
      return false;
    }
  }
}
