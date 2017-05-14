<?php
// for ($year = date('Y') - 99; $year <= date('Y'); $year++ ){
//   echo $year . '<br />';
// }
// while (++$year <= $currentYear) {
//   echo $year . '<br />';
// }

// do {
//   echo $year . '<br />';
// } while (++$year <= $currentYear);

$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Build something awesome';
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HTML', 'CSS');
sort($learn);

for($i = 0; $i < count($learn); $i++){
  echo $learn[$i] . '<br>';
}
//
// $count = 0;
// while ((list($key, $val) = each($learn)) && $count++ < 2) {
//   echo "$key => $val <br />";
// }

 ?>
