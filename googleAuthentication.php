<?php

    include("server.php");


	$info_query = "SELECT * FROM google_users";

        
    $ar_info = mysqli_query($con, $info_query);

        
    while($row_name = mysqli_fetch_array($ar_info)) {

        $name=$row_name['name'];
    }

	while($row_email = mysqli_fetch_array($ar_info)) {

        $email=$row_email['email'];
    }

    $_SESSION['name'] = $name;
    $_SESSION['success'] = "";
    $_SESSION["loggedin"] = true;

    header("location: index.php");
?>