<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="cssFiles/mainBackground.css">
    <link rel="stylesheet" href="cssFiles/login.css">
    <link rel="stylesheet" href="cssFiles/loginBtn.css">


</head>
<body>

<?php include 'header.php';?>

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>


<div id = "container">


        <form method = "post">
            <div class = 'inputUsNm'> Username <div>
            <input type = "text" name = "username" placeholder = "Username">
            <div class = 'inputUsNm'> Password <div>
            <input type = "password" name = "pwd" placeholder = "Password...">


                        <button type = 'submit' name = 'submit'>  <span>LOGIN</span>
                        <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                            <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                        </svg>
                        </button>

        </form>


</div>



 </body>
 </html>
 
 <?php


function alert($msg) {
    echo "<script type='text/javascript'>window.alert('$msg');</script>";
}



if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    require_once 'database.php';


    $check = "SELECT  * FROM person WHERE username = '$username' AND pwd = '$pwd' ";
    $result = $conn->query($check);
    if ($result->num_rows < 1) {
        alert("Incorrect Credentials");
        exit();
    }
    else{      
    
           session_start();
            $_SESSION["user"] = $username;
            header("location: home.php?error=none");        
            exit();

    }



}



