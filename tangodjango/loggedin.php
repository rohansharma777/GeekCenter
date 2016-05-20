<?php 
	$check = $_COOKIE['password'];
	header("CACHE-CONTROL: no-cache");

	if(!$check == '78789893'){
		header("Location: login.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Welcome <?php echo $_COOKIE['user']; ?>
</body>
</html>