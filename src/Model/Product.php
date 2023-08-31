<?php
// The Model
class Product {
  public static function create($name, $description, $price) {
    $db = Database::connect();
    $stmt = $db->prepare("INSERT INTO products (name, description, price) VALUES (?, ?, ?)");
    $stmt->execute([$name, $description, $price]);
  }
}
