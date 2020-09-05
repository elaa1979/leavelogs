<?php 
  include('models/session.php');
  session_start(); 
  $current_session = isset($_SESSION['CURRENT_SESSION']) ? unserialize($_SESSION["CURRENT_SESSION"]) : null;
  if ($current_session==null) {
  	header('location: login.php');
  }

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['CURRENT_SESSION']);
  	header("location: login.php");
  }
