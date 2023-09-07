<?php
require_once __DIR__ . '/UserController.php';

class TeacherController extends UserController
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


  public function updateTeachers($id, $name, $email, $address, $birthday, $photo = null) {
    // Outra lógica específica aqui :)
    return $this->updateUser($id, $name, $email, $address, $birthday, $photo);
}



}
