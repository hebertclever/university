<!-- src/Model/Teacher.php -->
<?php
class Teacher extends User {
  public $Qualifications;
  public $SubjectsTaught;

  public function __construct($UserID = null, $UserName = null, $Password = null, $Email = null, $RoleID = null, $Qualifications = null, $SubjectsTaught = null) {
    parent::__construct($UserID, $UserName, $Password, $Email, $RoleID);
    $this->Qualifications = $Qualifications;
    $this->SubjectsTaught = $SubjectsTaught;
  }
}

