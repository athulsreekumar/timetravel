<?php

session_start();

//Variable initialisation

$name = "";
$email = "";
$password1 = $password2 = "";

$errors = array();

//connect to database
$con = mysqli_connect('localhost','root','','timetravel') or die("could not connect to the database");

//Registering Users
if(isset($_POST['submitBtn'])){   
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password1 = mysqli_real_escape_string($con, $_POST['password1']);
    $password2 = mysqli_real_escape_string($con, $_POST['password2']);

    //input validation

    if(empty($name)){
        array_push($errors,"Name is required");
    }
    if(empty($email)){
        array_push($errors,"Email is required");
    }
    if(empty($password1)){
        array_push($errors,"Password is required");
    }
    if($password1 != $password2){
        array_push($errors,"Passwords Do Not Match");
    }


    //email sanity check

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors,"Enter Valid email ID");
    }

    //Existing user check

    $checkUser = "SELECT * from tt WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($con,$checkUser);
    $user = mysqli_fetch_assoc($result);

    if($user){
        if($user['email'] === $email){
            array_push($errors,"This email ID is already registered with us");
        }
    }

    if(count($errors) == 0){

        $password = md5($password1); // This will encrypt the password
        $query = "INSERT INTO tt (name, email, password) VALUES ('$name','$email','$password')";

        mysqli_query($con, $query);
        $_SESSION['name'] = $name;
        $_SESSION['success'] = "You have successfully registered";

        header("location: login.php"); //if the user is registered the user will be redirected tot the login page
    }


}
//LOGIN USER

if(isset($_POST['loginBtn'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    //Input Validation

    if(empty($email)){
        array_push($errors,"Email is required");
    }
    if(empty($password)){
        array_push($errors,"Password is required");
    }

    //email sanity check

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors,"Enter Valid email ID");
    }


    if(count($errors) == 0){
        
        $password = md5($password);

        $name_query = "SELECT FROM tt WHERE email='$email'";
        $query = "SELECT * FROM tt WHERE email='$email' AND password='$password' ";
        $result = mysqli_query($con,$query);
        $name1 = mysqli_query($con, $name_query);
        $name = $name1['name'];

        if(mysqli_num_rows($result)){

            $_SESSION['name'] = $name;
            $_SESSION['success'] = "";
            header("location: index.php"); //If email and password provided matches with the database records the user is redirected to the homepage
        }
        else{
            echo $name;
            array_push($errors,"Email or Password is incorrect");
        }
    }
}




?>