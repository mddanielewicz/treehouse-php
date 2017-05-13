<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
  <?php
    $name = 'Malachi';
    $string_one = 'Learning to display ';
    $string_one .= '"Hello ';
    $string_one .= $name;
    $string_one .= '!" to the screen.';
//    $string_one = $string_one . "\n";
    //Prepend to the string
//    $string_one = "I am " . $string_one;
//    echo $string_one;
    $isReady = true; 
    $isReady = false;
  
//    var_dump(1 + '2');
    $a = 10;
    $b = '10';
  
//    var_dump($a == $b);
//    var_dump($a === $b);
    
    //($string_one == 'Learning to display "Hello Malachi!" to the screen.');
    if($string_one == 'Learning to display "Hello Malachi!" to the screen.') {
      echo "The values match!";
    }elseif ($string_one == ""){
      echo '$string_one is empty';
    }else {
      echo "The values do not match :/";
    }
  
  ?>
</body>
</html