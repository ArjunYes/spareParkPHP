<?php
  session_start();
  session_unset();
  session_destroy();
  header("Location: /worldmovies/loginregister.php?logout=success");
?>
