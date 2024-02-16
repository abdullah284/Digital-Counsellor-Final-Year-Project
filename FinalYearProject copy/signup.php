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

    <div class = 'inputUsNm'> Full Name <div>

        <input type = "text" name = "name" placeholder = "Full name...">

        <div class = 'inputUsNm'> Username <div>


        <input type = "text" name = "username" placeholder = "Username...">

        <div class = 'inputUsNm'> Password <div>


        <input type = "password" name = "pwd" placeholder = "Password...">
   




     <button type = 'submit' name = 'submit'>  <span>SING UP</span>
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

    $name = $_POST["name"];
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    require_once 'database.php';



    
    if(empty($name) ||  empty($username) || empty($pwd) ){

        alert("Please Fill All Fields");

        exit();

    }


    $anyUser = "SELECT  username FROM person WHERE username = '$username' ";
    $result = $conn->query($anyUser);
    if ($result->num_rows > 0) {
        alert("Username Already Taken");
        exit();


    }
    else{      
        $sql = "INSERT INTO person (name, username, pwd) VALUES ('$name' , '$username' , '$pwd');";

        if (mysqli_query($conn, $sql)) {
                    alert("Signup Succesful");

            exit();

          } else {
            alert("Signup error");

          exit();
          }





    }







}

















