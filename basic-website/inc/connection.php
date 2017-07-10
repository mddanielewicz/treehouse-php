<?php

include('./.gitignore/env-var.php');
include('../.gitignore/env-var.php');

try {
  $db = new PDO($dsn, $user, $pw, $options);
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "Unable to connect 2 database";
  echo $e->getLine();
  exit;
}

?>
