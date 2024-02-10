




<!DOCTYPE html>
<html>
<head>
	<title>Goals</title>
    <link rel="stylesheet" href="cssFiles/rippleBackground.css">
    <link rel="stylesheet" href="cssFiles/goals.css">
    <link rel="stylesheet" href="cssFiles/goalsBtn.css">

</head>
<body>
<?php include 'header.php';?>



<?php

$user = $_SESSION["user"];
$age;
$weight;
$height;
$gender;
$goalWeight;



require_once 'database.php';
$sql = "SELECT  * FROM personDetails WHERE username = '$user' ";
$result = $conn->query($sql);


while($row = mysqli_fetch_array($result))
{
        $age = $row['age'];
        $weight = $row['weight'];
        $height = $row['height'];
        $gender = $row['gender'];
        $goalWeight = $row['goalWeight']; 

}

if((empty($age) OR empty($weight) OR empty($height) OR empty($gender))) {



$carbs = 'N/A';
$fiber = 'N/A';
$totalFats = 'N/A';
$maintainProtein = 'N/A';
$protein = 'N/A';
$sleepHours = 'N/A';
$water = 'N/A';



}

else if ($gender == 'male') {

    if( $goalWeight == 'gain'){
                $Cals = round( (66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age)) ) +500;

                $carbs = round( ($Cals * 0.55)/4 ) ;
                $fiber = round( ($Cals/1000) * 14 ) ;
                $totalFats = round( ($Cals * 0.3)/9 ) ;
                $protein = round($weight * 1.2);
               
                $sleepHours;
                $water = $weight * 0.033 ;
                $water = round($water*10)/10 ;
                $water = $water*1000;

    }
    else if( $goalWeight == 'lose'){
        $Cals = round( (66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age)) ) -500;

        $carbs = round( ($Cals * 0.55)/4 ) ;
        $fiber = round( ($Cals/1000) * 14 ) ;
        $totalFats = round( ($Cals * 0.3)/9 ) ;
        $protein = round($weight * 0.75);

        $sleepHours;
        $water = $weight * 0.033 ;
        $water = round($water*10)/10 ;
        $water = $water*1000;

}
else {
    $Cals = round( (66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age)) );

    $carbs = round( ($Cals * 0.55)/4 ) ;
    $fiber = round( ($Cals/1000) * 14 ) ;
    $totalFats = round( ($Cals * 0.3)/9 ) ;
    $protein = round($weight * 0.75);

    $sleepHours;
    $water = $weight * 0.033 ;
    $water = round($water*10)/10 ;
    $water = $water*1000;

}

if( ($age>6) AND ($age<18)){
$sleepHours = 10;
}
else{
    $sleepHours = 7;
}

}
else{

    if( $goalWeight == 'gain'){

    $Cals = round( (655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age)) ) +500;

    $carbs = round( ($Cals * 0.55)/4 ) ;
    $fiber = round( ($Cals/1000) * 14 ) ;
    $totalFats = round( ($Cals * 0.3)/9 ) ;
    $protein = round($weight * 1.2);
    $sleepHours;
    $water = $weight * 0.033 ;
    $water = round($water*10)/10 ;
    $water = $water*1000;

    }
    else if( $goalWeight == 'lose'){

        $Cals = round( (655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age)) ) -500;
    
        $carbs = round( ($Cals * 0.55)/4 ) ;
        $fiber = round( ($Cals/1000) * 14 ) ;
        $totalFats = round( ($Cals * 0.3)/9 ) ;
        $protein = round($weight * 0.75);
     
        $sleepHours;
        $water = $weight * 0.033 ;
        $water = round($water*10)/10 ;
        $water = $water*1000;

        }
    else{

        $Cals = round( (655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age)) ) ;
    
        $carbs = round( ($Cals * 0.55)/4 ) ;
        $fiber = round( ($Cals/1000) * 14 ) ;
        $totalFats = round( ($Cals * 0.3)/9 ) ;
        $mprotein = round($weight * 0.75);

        $sleepHours;
        $water = $weight * 0.033 ;
        $water = round($water*10)/10 ;
        $water = $water*1000;

    }




    if( ($age>6) AND ($age<18)){
    $sleepHours = 10;
    }
    else{
        $sleepHours = 7;
    }

}





?>



        <div id = "container">
                    <div class="row">
                            
                    <br>
                    <br>

                            <div class = 'formTitle'> Lifestyle</div>
                            <br>
                            <br>
                            <br>
                           
                                    <form action = "goalTrack/addWater.php" method = "post">

                                        <label>   Ml of water  </label>

                                        <br>
                                        <br>
                                        <input class = 'aim1' type = "number" name = "waterIntake" placeholder = "...ml">
                                        <div class = 'aim'>  /<?php echo $water; ?> ML  </div>


                                        <br>
                                        <br>

                                        
                                        <br>
                                        <button type = "submit" name = "submit">  <span>ADD</span>
                                        <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                                            <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"/>
                                        </svg>
                                        </button>
                                        <br>
                            <br>
                                        
                                    </form>




                                    <form action = "goalTrack/addSleep.php" method = "post">


                                        <label>Hours Of Sleep</label>
                                        <br>
                                        <br>
                                        <input class = 'aim1' type = "number" name = "sleep" placeholder = "...hours">
                                        <div class = 'aim'>  /<?php echo $sleepHours; ?> HOURS  </div>

                                        <br>

                                        <button type = "submit" name = "submit">  <span>ADD</span>
                                        <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                                            <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"/>
                                        </svg>
                                        </button>
                                    </form>









                    </div>

                    <br>
                    <br>
                    <br>
                    <br>

                    
                    <div class = 'formTitle'> Diet</div>
                    <br>
                    <br>
                 
                   

                            <br>
                                <form  action = "goalTrack/addComplexCarbs.php" method = "post" >
                                <label> Grams Of Complex Carbohydrates</label>
                                <br>
                                <br>
                                <input class = 'aim1'  type = "number" name = "complexCarbs" placeholder = "...grams">
                                <div class = 'aim'>  /<?php echo $carbs; ?> GRAMS  </div>

                                

                                        <br>
                                        <button type = "submit" name = "submit">  <span>ADD</span>
                                        <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                                            <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"/>
                                        </svg>
                                        </button>
                                  
                            <br>

                            
                            <br>

                                <form action = "goalTrack/addUnsatFats.php" method = "post">
                                <label>Grams Of Unsaturated Fats</label>
                                <br>
                                <br>
                                <input class = 'aim1' type = "number" name = "unsatFats" placeholder = "...grams">
                                <div class = 'aim'>  /<?php echo $totalFats; ?> GRAMS  </div>


                                        <br>
                                        <button type = "submit" name = "submit">  <span>ADD</span>
                                        <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                                            <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"/>
                                        </svg>
                                        </button>
                                        <br>
                            <br>

                                </form>


                            <form action = "goalTrack/addProtein.php" method = "post">
                                <label>Grams Of Protein</label>
                                <br>
                                <br>
                                <input class = 'aim1' type = "number" name = "protein" placeholder = "...grams">
                                <div class = 'aim'>  /<?php echo $protein; ?> GRAMS  </div>


                                        <br>
                                        <button type = "submit" name = "submit">  <span>ADD</span>
                                        <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                                            <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"/>
                                        </svg>
                                        </button>
                                  <br>
                                </form>
                            <br>
                                <form action = "goalTrack/addFibre.php" method = "post">
                                <label for ="high-cardio">Grams Of Total Fibre</label>

                                <br>
                                <br>

                                <input class = 'aim1' type = "number" name = "fibre" placeholder = "...grams">
                                <div class = 'aim'>  /<?php echo $fiber; ?> GRAMS  </div>


                                        <br>
                                        <button type = "submit" name = "submit">  <span>ADD</span>
                                        <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                                            <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"/>
                                        </svg>
                                        </button>
                                  

                                </form>
                            

                            <br>
                            <br>
                            <br>
                            <br>
                   <div class = 'formTitle'> Exercise</div>
                    <br>
                    <br>
                    <br>


                            <form action = "goalTrack/addHighCardio.php" method = "post">

                            <label> Minutes Spent On High Intensity Cardio(e.g running) </label>
                            <input type="number" name = "highCardio" placeholder = "...minutes">

                                        <br>
                                        <button type = "submit" name = "submit">  <span>ADD</span>
                                        <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                                            <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"/>
                                        </svg>
                                        </button>
                                        

</form>
                            <br>
                            <form action = "goalTrack/addLowCardio.php" method = "post">
                            <label > Minutes Spent On Low Intensity Cardio(e.g walking) </label>
                            <input type="number" name = "lowCardio" placeholder = "...minutes">
                                        <br>
                                        <button type = "submit" name = "submit">  <span>ADD</span>
                                        <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                                            <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"/>
                                        </svg>
                                        </button>
</form>
                            <br>
                            <form action = "goalTrack/addHighStrength.php" method = "post">
                            <label > Minutes Spent On High Intensity Strength Training </label>
                            <input type="number" name = "highStrength" placeholder = "...minutes">

                                        <br>
                                        <button type = "submit" name = "submit">  <span>ADD</span>
                                        <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                                            <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"/>
                                        </svg>
                                        </button>
</form>
                            <br>
                            <form action = "goalTrack/addLowStrength.php" method = "post">
                            <label> Minutes Spent On Low Intensity Strength Training </label>
                            <input type="number" name = "lowStrength" placeholder = "...minutes">

                                        <br>
                                        <button type = "submit" name = "submit">  <span>ADD</span>
                                        <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                                            <path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"/>
                                        </svg>
                                        </button>
</form>
                            <br>
                            

            
        </div>


<div id = "container2">

<div id = 'question'> Did you know diet and lifestlye plays a vital role to mental wellbeing? </div>

</div>


<div id = "container3">

<div id = 'txt'> A healthy, well-balanced diet can help us feel more positive in numerous ways, both mentally and physically.
    Combining this with an active lifestlye will further boost our motivation and self-esteem, which would ultimately lead to 
    a better mental state of mind.



</div>
</div>



<div id = "container4">

<div id = 'subQuestion'>
What is a healthy lifestlye? 

</div>
</div>



<div id = "container5">

<div id = 'txt'>

This can be broken down into four key things. Sleep, dietary intake, exercise, and last but not least,
your motivation. 
Information on sleep advice can be found on the <a href="http://localhost/anxiety/home.php">Home Page</a> 

and information about diet and exercise advice can be 
found on the <a href="http://localhost/anxiety/profile.php">Profile Page.</a>

</div>
</div>



<div id = "container6">

<div id = 'txtMotivate'>

Motivation

</div>
</div>


<div id = "container7">
<div id = 'txt'>

There are many strategies, you could use to enhance your motivation. One very powerful technique is to write down your thoughts
and experiences throughut the day, in a notebook or diary.

A 2018 research study from the national library of medicine found that people who wrote down
 their thoughts and experiences had a reduction in symptoms of 
depression and anxiety. That’s because the process of writing released the energy of the negative thoughts,
 which helped them to quiet and ease their mind.

Keeping a track of your thoughts will also enable you to learn patterns in your thinking. You could analyse your 
potential stress triggers more effectively by analysing your sequence of thoughts and experiences.
This will signifiantly increase your control over your mind. That is why keeping a journal with you all 
the time is highly advised. 



</div>
</div>



<div id = "container8">
<div id = 'txt'>


Note, there is also a feature for tracking your daily lifestyle intakes in the
<a href="http://localhost/anxiety/statistics.php">progress page</a>
 of this app.
This will help you track your daily macros, sleep, exercise and water intakes over time and compare it with how you felt that day.
This will give you an insight on how the different trends in daily lifestyle intakes affected your mood, and will give you
an oppertunity to learn your lifestyle patterns and how they affect your mental stability. This will promote a more effective
growth, not only in mental wellbeing but also in mental understanding.




</div>
</div>




            <div class='ripple-background'>
            <div class='circle xxlarge shade1'></div>
            <div class='circle xlarge shade2'></div>
            <div class='circle large shade3'></div>
            <div class='circle mediun shade4'></div>
            <div class='circle small shade5'></div>
            </div>







 </body>
 </html>
 







