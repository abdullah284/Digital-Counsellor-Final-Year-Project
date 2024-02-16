<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
    <link rel="stylesheet" href="cssFiles/profileRipple.css">
    <link rel="stylesheet" href="cssFiles/profile.css">
    <link rel="stylesheet" href="cssFiles/profileBtn.css">
    <link rel="stylesheet" href="cssFiles/profileSlider.css">



</head>
<body>

<?php include 'header.php';?>



<?php
function alert($msg) {
    echo "<script type='text/javascript'>window.alert('$msg');</script>";
}

if(isset($_GET['cantProceed']))
{
    alert('Please Insert All Fields');
}

if(isset($_GET['cantProceed2']))
{
    alert('Please Tick A Field');
}
?>





<div id = "container">

    



                    <div class="row">
                            Your Details
                            <br>
                            <br>

                                    <form action = "profile/addDetails.php" method = "post">
                                        <label for = "age">Age</label>
                                        <input id = "age" type = "number" name = "age" placeholder = "...years old">
                                        
                                    <br>
                                    <br>
                                    <br>

                                        <label for ="male">Male</label>
                                        <input type = "radio" name = "gender" value = "male" placeholder = "...male">
                                        <br>
                                        <br>
                                        <br>
                                        <label for ="female">Female</label>
                                        <input type = "radio" name = "gender" value= "female" placeholder = "...female">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                        <label for ="height">Height</label>
                                        <input type = "number" name = "height" placeholder = "...cm">
                                    <br>
                                        <label for ="wieght">Weight</label>
                                        <input type = "number" name = "weight" placeholder = "...kg">    
                                        
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
                                                <br>
                                                <br>
                                                <br> 
                                                <br>



                                                <div>Do You Have A Current Fitness Goal? (Optional) </div>
                                                <br>
                                                <br>
                                                <br> 
                                                <br>
                                        <form action = "profile/weightOptional.php" method = "post">



                                                <label for ="gain">Gain Muscle</label>
                                                <input type = "radio" name = "weight" value = "gain" >
                                                <br>
                                                <br>
                                                <br>
                                                <label for ="maintain">Maintain Weight</label>
                                                <input type = "radio" name = "weight" value= "maintain" >
                                                <br>
                                                <br>
                                                <br>
                                                <label for ="lose">Lose Fat</label>
                                                <input type = "radio" name = "weight" value= "lose" >
                                                    
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

                                        Describe your mood today on a scale of 1-10, with 10 being the best and 1 being the worst.
                                        <br>
                                        <br>
                                        <br>
                                        <br>


                                            <form method = "post" action = "profile/mood.php" >
                                            <input name = 'mood' id = 'myRange' class = 'slider' type="range" min="1" max="10" value="5"    oninput="this.nextElementSibling.value = this.value">
                                            <output></output>
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
                                            <br>


</form>

                    
                                            <br>
                                            <br>
                                            <br>


                    </div>
                    <br>
                                            <br>
                                            <br>



</div>

                    <div id = "container2">
                        <div id = 'welcome'> Welcome to your profile!</div>

                    </div>

                    <div id = "container3">
                        <div id = 'profileTxt'> This is the powerhouse for boosting your mental and psychological strength.
                             Here we will analyse your lifestlye requirments based on your physical details. These
                            are used to calculate accurate recommended daily quantities of different food macros which will 
                            optimise the progress of improving your state of mind. These macros include complex
                            carbohydrates, unsaturated fats, fiber, protien and also water and sleep intake requiremnts.
                            </div>
                    </div>

                    <div id = "container4">
                        <div id = 'profileTxt'> 

                        For a healthy mind, it is essential to make sure you're recieveing all your healthy macros.
                        Did you know that complex carbs play a role in increasing healhy gut bacteria, and these are 
                        acctually associated with monitoring mood and mental disorders. 
                        Inadequate supply of carbohydrates increases the level of cortisol in your body, which is a stress 
                        hormone. Also without healthy carbohydrates, your blood sugar can drop too low, causing a reduction in energy.
                        All these are linked to your mental wellbeing. Complex carbohydrates, fiber and protein are 
                        essential for the production of serotonin which is a neurotransmitter which regulates your mood.


            
                        
                            </div>
                    </div>

                    <div id = "container5">
                        <div id = 'profileTxt'> 

                     Some healthy choices of complex carbs are:


                     <ul>
  <li>Brown/wild rice</li>
  <li>Oats</li>
  <li>Lentils</li>
  <li>Sweet potatoes</li>
  <li>Whole wheat bread</li>
  <li>Quinoa</li>
  <li>Green peas</li>

</ul>  
            
                        
                            </div>
                    </div>


                    <div id = 'container6'>
                    <div id = 'profileTxt'> 

                    However it is important to make sure that you limit simple carbohydrates, as they can 
                    cause adrenaline spikes which trigger feeling of anxiety. Another thing to avoid is caffeine 
                    after 3pm, as it can can disrupt sleep for up to six hours after consuming it.  
                    Poor sleep is linked to triggering mania, psychosis and paranoia so it's essential to make sure we
                    are recieving enough sleep every night.
</div>



                   

</div>



<div id = 'container7'>

<div id = 'profileTxt'> 
Foods rich in protein contain amino acids needed to help produce key neurotransmitters in preventing 
and treating depression and anxiety. A diet rich in protein is also shown 
improve overall energy levels.
</div>

</div>




<div id = 'container8'>
<div id = 'profileTxt'> 

When exercising, the body releases chemicals called endorphins. These are neurotransmitter which interact
 with the receptors in the brain which are linked to improving mood and confidence. 

</div>
</div>


<div id = 'container9'>
<div id = 'profileTxt'> 

Quality sources of protein include, meat, chicken, fish/seafood, eggs, milk/dairy products, nuts and 
legumes/beans such as lentils, chickpeas and tofu.
Foods with a good surce of unsaturated fats include, nuts, seeds such as pumpkin and sesame seeds and oils.


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
</head>





