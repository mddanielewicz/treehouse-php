<?php
  $player1 = 0;
  $player2 = 0;
  $round = 0;
  // var_dump(abs($player1 - $player2));
  // var_dump(abs($player2 - $player1));

  //Win
  //player must reach a score of 11
  //player must be a minimum of 2 points higher than opponent
  while (abs($player1 - $player2)<2 || ($player1<11 && $player2<11)) {
    //HILE those conditions are NOT met, a single player will receive 1 point at the end of each round
    $round++;
    echo "<h2>Round $round</h2><br />";
    if (rand(0,1)){
      $player1++;
    }else{
      $player2++;
    }
    echo "Player1 = $player1<br />";
    echo "Player2 = $player2<br />";
  }
  echo "<h1>";
  if ($player1 > $player2) {
    echo "Player1 ";
  }else{
    echo "Player2 ";
  }
  echo "is the winner after round $round<h1><br />";
 ?>
