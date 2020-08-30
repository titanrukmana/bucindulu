<?php
session_start();
include "connection/connect.php"
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if($_SESSION["name"]) {
?>
Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" title="Logout">Logout.</a>
Click here to <a href="form.php" title="form">add text</a>
Click here to <a href="test.php" title="welcome">see the front page</a>
<?php
}else echo "<h1>Please login first .</h1>";
?>
</body>
</html>