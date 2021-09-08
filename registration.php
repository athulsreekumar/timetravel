<?php 

    include('server.php');

?>
<!doctype html>
<html>
	<head>

    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

		<!--Custom CSS files-->
		<link rel="stylesheet" href="css/style.css">
    	<title>Welcome To TimeTravel</title>
  	</head>
  	<body>
	  	<section class="Form my-4 mx-5">
		  	<div class="container">
			  	<div class="row">
				  	<div class="col-lg-5">
					  	<div class="leftside">
						  	<div class="illustration">
							  	<img src="image/TimeTravel1.png" class="img-fluid">
						  	</div>
						  	<div class="info">
							  	<h1>Welcome to TimeTravel</h1>
							  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam risus augue, efficitur eget euismod eget, convallis ac lorem. Aliquam elit arcu, aliquam eu ipsum sed, tincidunt auctor nisl. Proin pharetra ex vitae egestas faucibus. Morbi velit massa, egestas eu eros vitae, fringilla iaculis neque. Pellentesque et commodo risus.</p>
						  	</div>
					  	</div>
				  	</div>
				  	<div class="col-lg-7">
					  
					  	<form action="registration.php" method="POST">
                        <?php include('errors.php') ?>
					  	<div class="form-box mt-5 pt-5">
							<h1 class="font-weight-bold py-3">Register</h1>

                        	<div class="form-row">
                            	<div class="col-lg-7">
                              		<input type="text" class="form-control my-3 p-3" name="name" id="name" placeholder="Enter Your Name" style="text-align: center;">						
                            	</div>
                        	</div>

						  	<div class="form-row">
							  	<div class="col-lg-7">
									<input type="email" class="form-control my-3 p-3" name="email" id="email" placeholder="Enter Your Email" style="text-align: center;">								
							  	</div>
						  	</div>

						  	<div class="form-row">
							 	<div class="col-lg-7">
									<input type="password" class="form-control my-3 p-3" name="password1" id="password" placeholder="Enter Your Password" style="text-align: center;">						
							 	</div>
						 	</div>

                          	<div class="form-row">
							 	<div class="col-lg-7">
									<input type="password" class="form-control my-3 p-3" name="password2" id="password" placeholder="Re-enter Your Password" style="text-align: center;">						
							 	</div>
						  	</div>

						  	<div class="form-row">	
							  	<div class="col-lg-7">
									<input type="submit" name="submitBtn" class="btn1 mt-3 mb-5" value="Register">
							  	</div>
						  	</div>

                  		  	<p>Already have an account? <a href="login.php" style="font-weight: bold;">Log In</a></p>
					   	</div>	
                       
					  	</form>
				  	</div>
			  	</div>
		  	</div>
	  	</section>
      

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  	</body>
</html>