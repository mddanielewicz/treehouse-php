<?php
  $iceCream = array(
  'Alena' => 'Black Cherry',
  'Treasure' => 'Chocolate',
  'Dave' => 'Cookies and Cream',
  'Rialla' => 'Strawberry'
  );
  $iceCream['alena'] = 'Pistachio';
  $iceCream['Dave Thomas'] = 'Cookie Dough';
  // $iceCream[] = 'Vanilla';
  // $iceCream[] = 'Mint Chip';
  asort($iceCream);
  var_dump($iceCream);

  $keys = array(
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
  );
  var_dump($keys);
 ?>
