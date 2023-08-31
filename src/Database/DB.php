<?php
require_once 'env_loader.php';

class Database {
  public static function connect() {
    if (!loadEnv(__DIR__ . '/../../.env')) {  
      die("Falha ao carregar o arquivo .env");
    }

    if (!isset($_ENV['DB_HOST'], $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS'])) {
      die("Uma ou mais variáveis de ambiente do banco de dados estão faltando");
    }

    $host = $_ENV['DB_HOST'];
    $db = $_ENV['DB_NAME'];
    $user = $_ENV['DB_USER'];
    $pass = $_ENV['DB_PASS'];

    try {
      $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      return $pdo;
    } catch (PDOException $e) {
      die("Could not connect: " . $e->getMessage());
    }
  }
}
