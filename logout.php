<?php
  session_start();
  session_unset();
  session_destroy();
  header("Location: /spareparkPhp/index.php?logout=success");
?>
