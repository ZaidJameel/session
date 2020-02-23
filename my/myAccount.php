<h1 style="text-align: center;">
<?php 
	session_start();
	echo $_SESSION['name']."<br>";
	echo $_SESSION['email'];
?>
</h1>