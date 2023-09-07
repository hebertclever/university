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
    var_dump($passwordHashed);
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
      var_dump($user['password']);  

      if (password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['email'] = $email;
        header("Location: personal_info.php");
        exit();
      } else {
        return "Usuário ou senha inválidos";
      }
    } else {
      echo "Usuário não encontrado!";
    }
  }
}
