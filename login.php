<?php 
	session_start();
	if (isset($_GET['submit'])) {
		if ($_SESSION['email']==$_GET['email'] && $_SESSION['password']==$_GET['password']) {
			header("location: my/myAccount.php");
		}
		else{
			echo "Email or Password is incorrect";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!- Bootstrap CDN -!>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12">
				<form action="" method="GET">
				  <div class="form-group">
				    <label>Email address</label>
				    <input type="email" class="form-control" name="email" required>
				  </div>
				  <div class="form-group">
				    <label>Password</label>
				    <input type="password" class="form-control" name="password" required>
				  </div>
				  
				  <input type="submit" class="btn btn-primary" value="OK" name="submit">

				</form>
			</div>
		</div>
	</div>

</body>
</html>