<!-- src/Model/Student.php -->
<?php
class Student extends User {
  public $GradeLevel;
  public $Major;

  public function __construct($UserID = null, $UserName = null, $Password = null, $Email = null, $RoleID = null, $GradeLevel = null, $Major = null) {
    parent::__construct($UserID, $UserName, $Password, $Email, $RoleID);
    $this->GradeLevel = $GradeLevel;
    $this->Major = $Major;
  }
}
