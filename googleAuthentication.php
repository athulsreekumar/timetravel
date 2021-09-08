<?php

    include("server.php");

	$name_query = "SELECT FROM google_users WHERE email='$email'";
	$name1 = mysqli_query($con, $name_query);
	$name = $name1['name'];
	$_SESSION['name'] = $name;
	$_SESSION['success'] = "";

    header("location: index.php");
?>