<?php
class ProductController {
  public $success = false;

  public function store() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST['name'], $_POST['description'], $_POST['price'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        Product::create($name, $description, $price);
        $this->success = true;
      } else {
        
        echo "Todos os campos são obrigatórios.";
      }
    }
  }
}
