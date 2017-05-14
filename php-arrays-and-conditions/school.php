<?php
  $firstName = 'Malachi';
  $lastName = 'Danielewicz';
  $grade = 12;
  $gpa = 71;
  $messageBody = '';

  if(!$firstName || !$lastName){
    echo "Please enter student name.";
  }else if ($grade < 9 || $grade > 12){
    echo "This if for high school only. Please enter a grade between 9 and 12";
  }else {
    if ($gpa < .70){
      $messageBody = "We look forward to seeing you at summer school, beginning July 1st!";
    } else {
      switch ($grade){
        case 9:
          $messageBody = "Congratulations on completing your freshman year in High School! We’ll see you on September 1st for the start of your sophomore year!";
          break;
        case 10:
          $messageBody = "Congratulations on completing your sophomore year in High School! We’ll see you on September 1st for the start of your junior year!";
          break;
        case 11:
          $messageBody = "Congratulations on completing your junior year in High School! We’ll see you on September 1st for the start of your senior year!";
          break;
        case 12:
          $messageBody = "Congratulations! You’ve graduated High School! Don’t forget to come back and visit.";
          break;
      }
    }
    echo "Dear $firstName $lastName, <br />";
    echo $messageBody;
  }

 ?>
