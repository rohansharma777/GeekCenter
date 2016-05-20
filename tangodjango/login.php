<?php 
	$user = $_POST['user'];
	$password = $_POST['password'];
	$self = $_SERVER['PHP_SELF'];

	if(!empty($user) and !empty($password)){
		if($password == '78789893'){
			setcookie("password", "access_granted");
			setcookie("user",$user);
			header("Location: loggedin.php");
			exit();
		}
		else{
			echo 'wrong password';
			setcookie("password");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo $self; ?>" method="post">
		Username: <input type="text" name="user" /><br />
		Password: <input type="password" name="password" /><br />
		<input type="submit" value="GO!" />
	</form>
</body>
</html>