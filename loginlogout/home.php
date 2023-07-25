<?php session_start();
if (!isset($_SESSION['username'])) {
	header('location:login.php');
}
?>
<h2>welcome <span style="color: #00c319"><?php echo $_SESSION['username'];?></span></h2>
<a href="logout.php">logout</a>