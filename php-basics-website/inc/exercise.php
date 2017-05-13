<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
  <?php
    //store each exercise in a string variable
    $exercise = 'Display "Hello world!"';
    $exercise2 = 'Convert Pounds to Kilograms';
    $exercise3 = 'Convert Kilograms to Pounds';
    $exercise4 = 'Convert Miles to Kilometers';
    $exercise5 = 'Convert Kilometers to Miles';
    $exercise6 = 'Month long string of the day';
    $exercise7 = 'String of the day with levels';
    //create a variable containing the day of the week
    $day = date('N');
    //use an if statement to test for the day of the week
    if($day == 1){
      //display the corresponding exercise string
      echo $exercise;
    }else if($day == 2){
      //display the corresponding exercise string
      echo $exercise2;
    }else if($day == 3){
      //display the corresponding exercise string
      echo $exercise3;
    }else if($day == 4){
      //display the corresponding exercise string
      echo $exercise4;
    }else if($day == 5){
      //display the corresponding exercise string
      echo $exercise5;
    }else if($day == 6){
      //display the corresponding exercise string
      echo $exercise6;
    }else if($day == 7){
      //display the corresponding exercise string
      echo $exercise7;
    }



  ?>
</body>
</html
