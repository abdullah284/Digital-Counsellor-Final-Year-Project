<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="cssFiles/header.css">

</head>
<body>


    <div id ="header">

        

                        <?php
                        session_start();
                        $choosepage;
                        $choosepage2;
                        $choosepage3;
                        $choosepage4;
                        $choosepage5;
                        $choosepage6;


                        if(isset($_SESSION["user"])) {
                            $choosepage = "<a href = 'home.php'>Home</a>";
                            $choosepage2 = "<a href = 'logout.php'>Log Out</a>";
                            $choosepage3 = "<a href = 'meditate3.php'>Meditate</a>";
                            $choosepage4 = "<a href = 'goals.php'>Daily Goals</a>";
                            $choosepage5 = "<a href = 'statistics.php'>Your Progress</a>";
                            $choosepage6 = "<a href = 'profile.php'>Your Profile</a>";

                        }
                        else{
                            $choosepage = "<a href = 'home.php'>Home</a>";
                            $choosepage2 = "<a href = 'signup.php'>Sign Up</a>";
                            $choosepage3 = "<a href = 'login.php'>Login</a>";
                            $choosepage4 = null;
                            $choosepage5 = null;
                            $choosepage6 = null;
                            

                        }
                        ?>




                <div id = "choice">
                <?php echo $choosepage;?>
                </div>


                <div id = "choice">
                <?php echo $choosepage2; ?>
                </div>



                <div id = "choice">
                <?php echo $choosepage3; ?>
                </div>

                <div id = "choice">
                <?php echo $choosepage4; ?>
                </div>

                <div id = "choice">
                <?php echo $choosepage5; ?>
                </div>

                <div id = "choice">
                <?php echo $choosepage6; ?>
                </div>
    </div>



                    


 </body>
 </html>
 