<?php

    if(isset($_GET['logout'])){

        session_destroy();
        unset($_SESSION['name']);
        header("location: login.php");  
       
    }
?>




<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!--Custom CSS files-->
	    <link rel="stylesheet" href="css/header.css">

        <!-- Navigation icon -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <!-- Navigation icon animation -->
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script>
            $(document).ready(function(){
                $('#icon').click(function(){
                    $('ul').toggleClass('show')
                });
            });
        </script>

        <title>Welcome To TimeTravel</title>
    </head>
    <body>
        <nav>
            <label class="logo">TimeTravel.com</label>
            <ul>
                <li style="color:white;">

                    <?php
                    
                    if(isset($_SESSION['email'])){
                        echo $_SESSION['email'];
                    }
                    
                    ?>


                </li>
                <li>
                    <a href="index.php?logout='1'" class="logout" name="logout" onclick="logout()">Logout</a>
                </li>
            </ul>
            <label id="icon">
                <span class="fa fa-bars">
                </span>
            </label>
        </nav>


    
    
    </body>
</html>  