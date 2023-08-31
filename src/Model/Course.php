// src/Model/Course.php
<?php
class Course {
  public $CourseID;
  public $CourseName;
  public $StartDate;
  public $EndDate;

  public function __construct($CourseID, $CourseName, $StartDate, $EndDate) {
    $this->CourseID = $CourseID;
    $this->CourseName = $CourseName;
    $this->StartDate = $StartDate;
    $this->EndDate = $EndDate;
  }
}
