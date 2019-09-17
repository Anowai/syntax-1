<?php
session_start();
if(!isset($_SESSION['login_user'])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Team Syntax</title>

</head>

<body>
	<h1 style="text-align:center; color: blue">WELCOME TO TEAM SYNTAX</h1>

    <div id="container">
    <h2 style="text-align:center; color: blue">You are logged in Successfully <?php echo $_SESSION['login_user']?> !</h2>
  </div>

   <div >
<a href="index.php"><button style="text-transform:none;text-align:right; color: red">Sign Out</button></a>
  </div>
</body>

</html>
