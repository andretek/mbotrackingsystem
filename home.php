<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['firstname'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
     <link rel="icon" type="icon/ico" href="ico/imbo.ico">
	<title>Processing . . .</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1 style="color: darkblue;">Congrats for signing In, <?php echo $_SESSION['firstname']; ?></h1>
     <a href="dashboard.php">CONTINUE TO Dashboard</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>