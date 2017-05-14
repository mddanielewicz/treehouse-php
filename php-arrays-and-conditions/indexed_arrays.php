<?php
  $learn = array('Conditionals', 'Arrays', 'Loops');
  //var_dump($learn);

  //echo $learn[0];
  //echo implode("<br>", $learn);
  array_push($learn, 'Functions', 'Forms', 'Objects');
  array_unshift($learn, 'HTML', 'CSS');
  // asort($learn);
  // sort($learn);
  // rsort($learn);
  shuffle($learn);
  var_dump($learn);
  // echo 'You removed ' . array_shift($learn);
  // echo 'You removed ' . array_pop($learn);
  // unset($learn[1], $learn[2]);
  // $learn = array_values($learn);
  // //$learn = 'my learning list';
  // $learn[0] = 'email';
  // var_dump($learn);
 ?>
