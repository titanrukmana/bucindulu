<?php 
session_start();
include 'connection/connect.php'; // Database connection

if(isset($_POST['submit'])){
  $creator = $_POST['txt_creator'];
  $text = $_POST['txt_text'];
  // Insert record
  $insert_query = "INSERT INTO pesan(creator, text) VALUES('".$creator."','".$text."')";

  mysqli_query($db,$insert_query);
  ?> terima kasih sudah menambahkan teks, <?php echo $_SESSION["name"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<?php
if($_SESSION["name"]) {
?>
<form method='post' action=''>
  <input type='text' placeholder='Text' name='txt_text' id='txt_text' ><br/>
  <input type='text' placeholder='Creator' name='txt_creator' id='txt_creator' ><br/>
  <input type='submit' value='Submit' id='submit' name='submit'>
</form>
<a href="admin.php">back to admin panel</a>
Click here to <a href="logout.php" title="Logout">Logout.</a>
Click here to <a href="test.php">see the front page</a> 
<?php
}else echo "<h1>Please login first .</h1>";
?>
</body>
</html>