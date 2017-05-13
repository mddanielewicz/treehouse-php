<?php
  $display_name = 'Malachi D. Danielewicz';
  $year = date('Y');
  $email = 'test@email.com';
  $twitter = "https://twitter.com/mddanielewicz";
?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title>PHP Basics <?php echo $display_name ?></title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div id="wrap">
        <section class="sidebar text-center">
          <div class="avatar">
            <img src="img/logo.png" alt="Alt For Image">
          </div>
          <h1><?php echo $display_name ?></h1>
          <p>Contact:<br />
          <?php echo "<p><a href='mailto:$email'>Message Me!</a></p>" ?>
          <hr />
          <ul class="social">
            <?php echo "<li><a href='$twitter' target='_blank'><span class='icon twitter'></span></a></li>" ?>
          </ul>
          <hr />
          <?php echo "<p>Today: " . date("l, F j, Y") . "</p>"; ?>
        </section>
        <section class="main">
          <h1>My First PHP Page</h1>

          <h2>Unit Conversion</h2>
            <?php include 'inc/unit-conversion.php'; ?>

          <hr />
          <hr />

          <h2>Daily Exercise</h2>
            <?php include 'inc/exercise.php'; ?>
        </section>
    </div>
    <section class="footer text-center">
      &copy; <?php echo $year . ' ';
      echo $display_name . '. ';
      // outputs e.g. 'Last modified: March 04 1998 20:43:59.'
      echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
      ?>
    </section>
  </body>
</html>
