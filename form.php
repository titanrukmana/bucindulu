<?php 
session_start();
include 'connection/connect.php'; // Database connection

if(isset($_POST['submit'])){
  $creator = $_POST['txt_creator'];
  $text = $_POST['txt_text'];
  if(!empty($creator && !empty($text))){
  $insert_query = "INSERT INTO pesan(creator, text) VALUES('".$creator."','".$text."')";
  
  mysqli_query($db,$insert_query);?>
  terima kasih sudah menambahkan teks, <?php echo $_SESSION["username"];}
else {
    echo "<h1>mohon isi semua form</h1>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<?php
if(isset($_SESSION["username"])) {
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
} else echo "<h1><a href='login.php'>Please login first .</a></h1>";
?>
</body>
</html>