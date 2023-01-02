<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    if ($_SESSION["user_type"] != 'admin') {
        echo "<script>  window.location.href = 'admin_login.php.php' </script>";
    }
}
?>