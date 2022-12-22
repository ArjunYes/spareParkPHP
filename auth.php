<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  include_once 'inc/dbc.php';

  // sf_login

  if (isset($_POST['sf_login'])) {
    # $_POST['login-email']
    # $_POST['login-password']

    

    // $query = "SELECT * FROM users WHERE email = :email AND password = :password";

    // $stmt = $pdo->prepare($query);
    // $stmt->execute([
    //   ':email' => $_POST['login-email'],
    //   ':password' => md5($_POST['login-password'])
    // ]);

    // if ($stmt->rowCount() == 0) {
    //   header("Location: /worldmovies/loginregister.php?login=incorrect");
    //   exit();
    // } else {
    //   while ($result = $stmt->fetch()) {
    //     $_SESSION["USER_ID"] = $result['userid'];
    //     $_SESSION["USER_NAME"] = $result['name'];
    //     $_SESSION["USER_EMAIL"] = $result['email'];

    //     header("Location: /worldmovies/myaccount.php");
    //     exit();
    //   }
    // }
  }

?>
