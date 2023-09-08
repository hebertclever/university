<?php
require_once __DIR__ . '../../Database/DB.php';

class AuthController
{
  public function registerUser($email, $password)
  {
    $conn = Database::connect();

    $sql = "SELECT email FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->fetch()) {
      return "E-mail já existe.";
    }

    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->bindParam(":password", $passwordHashed, PDO::PARAM_STR);

    if ($stmt->execute()) {
      $_SESSION['email'] = $email;
      return true;
    } else {
      return "Houve um erro ao registrar o usuário.";
    }
  }

  public function loginUser($email, $password)
  {
    $conn = Database::connect();

    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
      if (password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['email'] = $email;

        
        switch ($user['roleId']) {
          case 1:
            $_SESSION['userType'] = 'Admin';
            break;
          case 2:
            $_SESSION['userType'] = 'Teacher';
            break;
          case 3:
            $_SESSION['userType'] = 'Student';
            break;
          default:
            $_SESSION['userType'] = 'Unknown';
            break;
        }

        header("Location: personal_info.php");
        exit();
      } else {
        return "Usuário ou senha inválidos";
      }
    } else {
      return "Usuário não encontrado!";
    }
  }


  public function changePassword($email, $newPassword)
  {
    $conn = Database::connect();


    $passwordHashed = password_hash($newPassword, PASSWORD_DEFAULT);


    $sql = "UPDATE users SET password = :password WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->bindParam(":password", $passwordHashed, PDO::PARAM_STR);

    if ($stmt->execute()) {
      return true;
    } else {
      return "Houve um erro ao atualizar a senha.";
    }
  }
}
