<!-- src/Model/User.php -->
<?php
class User {
  public $UserID;
  public $UserName;
  public $Password;
  public $Email;
  public $RoleID;

  public function __construct($UserID = null, $UserName = null, $Password = null, $Email = null, $RoleID = null) {
    $this->UserID = $UserID;
    $this->UserName = $UserName;
    $this->Password = $Password;
    $this->Email = $Email;
    $this->RoleID = $RoleID;
  }
}
