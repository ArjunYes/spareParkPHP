<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    if ($_SESSION["user_type"] != 'sf_login') {
        echo "<script>  window.location.href = 'index.php' </script>";
    }
}
?>