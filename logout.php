<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["fullname"]);
   $_SESSION['success'] = "You are not logged in";
   
   header('Refresh: 1; URL = index.php');
?>