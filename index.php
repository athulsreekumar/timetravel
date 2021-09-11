<?php

    session_start();
    if(!isset($_SESSION['name'])){

        $_SESSION["msg"] = "You must login to first view this page";
        header("location: login.php");

    }

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
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!--Custom CSS files-->
        <link rel="stylesheet" href="css/style.css">
        <script defer src="js/script.js"></script>
        <title>Welcome To TimeTravel</title>
    </head>
  <body class="hp-body">
    <?php include("header.php")?>
    
      <section>
          <div class="userinfo" style="height:200px;padding:80px 100px; color:white;">


            <h3> Hi
            <?php
                if(isset($_SESSION['name'])){
                    echo $_SESSION['name'];
                }
            ?>, Welcome to Timetravel.</h3>

          </div>
          <div class="row" >
            <div class="col-sm">
                <div class="clk1">
                <div class="clock" id="clock">
                    <div class="hour">
                        <div class="hr" id="hr1"></div>
                    </div>
                    <div class="min">
                        <div class="mn" id="mn1"></div>
                    </div>
                    <div class="sec">
                        <div class="sc" id="sc1"></div>
                    </div>
                </div>
                <p style="text-align:center; margin-top: 30px;" class="places">Kolkata</p>
                <div>
                    <p class="placeInfo">
                       <p id="date_Kolkata" style="font-size: 15px;text-align: center;"></p>
                    </p>
                </div>
            </div>
            </div>
            <div class="col-sm">
                <div class="clk2">
                <div class="clock" id="clock">
                    <div class="hour">
                        <div class="hr" id="hr2"></div>
                    </div>
                    <div class="min">
                        <div class="mn" id="mn2"></div>
                    </div>
                    <div class="sec">
                        <div class="sc" id="sc2"></div>
                    </div>
                </div>
                <p style="text-align:center; margin-top: 30px;">Paris</p>
                <div>
                    <p class="placeInfo">
                        <p id="date_Paris" style="font-size: 15px;text-align: center;"></p>
                    </p>
                </div>
            </div>
            </div>
            <div class="col-sm">
                <div class="clk3">
                <div class="clock" id="clock">
                    <div class="hour">
                        <div class="hr" id="hr3"></div>
                    </div>
                    <div class="min">
                        <div class="mn" id="mn3"></div>
                    </div>
                    <div class="sec">
                        <div class="sc" id="sc3"></div>
                    </div>
                </div>
                <p style="text-align:center; margin-top: 30px;">New York</p>
                <div>
                    <p class="placeInfo">
                       <p id="date_NY" style="font-size: 15px;text-align: center;"></p>
                    </p>
                </div>
                </div>
            </div>
          </div>
      </section>




<script>

    window.onload = function clock() {
        setInterval(() => {
            var d1 = new Date();
            var n1 = d1.toLocaleString("en-US",{timeZone:"Asia/Kolkata",timeZoneName:"short"});
            document.getElementById("date_Kolkata").innerHTML = n1;

            var d2 = new Date();
            var n2 = d2.toLocaleString("en-US",{timeZone:"Europe/Paris",timeZoneName:"short"});
            document.getElementById("date_Paris").innerHTML = n2;

            var d3 = new Date();
            var n3 = d3.toLocaleString("en-US",{timeZone:"America/New_York",timeZoneName:"short"});
            document.getElementById("date_NY").innerHTML = n3;
        })}
    
</script>
  </body>
</html>