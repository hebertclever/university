// src/Model/Role.php
<?php
class Role {
  public $RoleID;
  public $RoleName;

  public function __construct($RoleID, $RoleName) {
    $this->RoleID = $RoleID;
    $this->RoleName = $RoleName;
  }
}
