<?php
  session_start();
  if (!isset($_SESSION['login_id'])) {
    header( "location: index.php" );
  }
?>