<?php
session_start();
include 'inc/functions.php';
$username1 = $_SESSION["username"];
   if (!isset($_SESSION["username"]))
    header("location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>JosephQT</title>
	<!-- CSS-->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php 
  include 'inc/nav.php';
?>
</body>
</html>