<?php

$sname= "localhost";
$unmae= "andretek";
$password = "@Password1";

$db_name = "mybasetekmbo";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}