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
if(isset($_SESSION["username"])) {
?>
Welcome <?php echo $_SESSION["username"]; ?>. Click here to <a href="logout.php" title="Logout">Logout.</a>
Click here to <a href="form.php" title="form">add text</a>
Click here to Click here to <a href="test.php" title="form">see front page</a>
<?php
} else echo "<h1>Please login first .</h1>";
?>
</body>
</html>