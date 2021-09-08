<?php 

    include('server.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Meta Tag for Google OAuth2-->
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="716874644979-t6id0asourl26nej7bjde0nr1b7jm2ct.apps.googleusercontent.com" >
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
				        <form action="login.php" method="POST" name="login">
					  	<div class="form-box mt-5 pt-5">

						    <h1 class="font-weight-bold py-3">Log In</h1>

						    <div class="form-row">
							    <div class="col-lg-7">
								    <input type="email" name="email" class="form-control my-3 p-3" placeholder="Enter Your Email" style="text-align: center;" id="email">								
							    </div>
						    </div>

						    <div class="form-row">
							    <div class="col-lg-7">
								    <input type="password" name="password" class="form-control my-3 p-3"  placeholder="Enter Your Password" style="text-align: center;" id="pass">							
							    </div>
						    </div>

						    <div class="form-row">	
							    <div class="col-lg-7">
								    <input type="submit" name="loginBtn" class="btn1 mt-3 mb-5 " value="Log in">
							    </div>
                                <?php include('errors.php') ?>
						    </div>

						    <a href="#" style="font-weight: bold;">Forgot Password?</a>

                  		    <p>New To TimeTravel? <a href="registration.php" style="font-weight: bold;">Sign Up</a></p>

						    <p class="lead mx-5 px-5 mt-5" style="margin-left">Other Ways of Signing in</p>
						    <div class="form-row">	
							    <div class="col-lg-7 mt-3">
									<div class="g-signin2" data-onsuccess="onSignIn" style="margin-left: 35%;">
							    </div>
						    </div>
					    </div>	
					    </form>
				    </div>
			    </div>
		    </div>
	    </section>


		<!--Javascript for Google Sign in button-->

		<script type="text/javascript">
			function onSignIn(googleUser) {
				var profile = googleUser.getBasicProfile();


				if(profile){
					$.ajax({
						type: 'POST',
						url: 'googleLogin.php',
						data: {id:profile.getId(), name:profile.getName(), email:profile.getEmail()}
					})
					.done(function(data){
						console.log(data);
						window.location.href = 'googleAuthentication.php';
					})
					.fail(function() { 
						alert( "Posting failed." );
					});

				}


    		}
		</script>



		<script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
			}
		</script>



		<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  	</body>
</html>