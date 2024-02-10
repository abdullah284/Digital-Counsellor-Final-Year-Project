<?php include 'header.php'; ?>
<?php

//IF ZEN
if (isset($_GET['chill'])) {

    $title = "        
            <div id = 'category_title'>
            <span>Choose Music</span>
            </div>   
            ";



$cat = 
            "   


            <div class = 'catText'> Vibrant Thoughts (8min)

            <button id = 'meditateBtn' onclick = 'startVibrantThoughts()' >  <span>PLAY</span>
            <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
            </svg>
            </button>

            </div>

            <br>
            <br>


            <div class = 'catText'> Road To Radiance (5min)

            <button id = 'meditateBtn' onclick = 'startRoadToRadiance()' >  <span>PLAY</span>
            <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
            </svg>
            </button>

            </div>

            <br>
            <br>


            <div class = 'catText'> Exlporing City Of Tech (11min)

            <button id = 'meditateBtn' onclick = 'startCityOfTech()' >  <span>PLAY</span>
            <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
            </svg>
            </button>

            </div>

            <br>
            <br>




            <form  action = 'genreChooser/backToCateogory.php' method = 'post'>
            <div class = 'catBackText'> 

            <button type = 'submit' name = 'submit'>  <span>BACK TO CATGEGORIES</span>
            <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
            </svg>
            </button>
            <br>
            <br>
            <div id = 'timerBox'>
            <div id='timeLeft'></div>
            </div>


            </div>
            </form>
            <br>

            ";   
    } 





                     




// ELSE AMBIENT
else if (isset($_GET['ambient'])) {

    $title = "        
            <div id = 'category_title'>
            <span>Choose Music</span>
            </div>   
            ";


            $cat =  
                    " <div class = 'catText'> Light hearted piano (5min)

                    <button id = 'meditateBtn' onclick = 'startLightHeartedPiano()' >  <span>PLAY</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>

                    </div>

                    <br>
                    <br>

                    <div class = 'catText'> Sway In The Rain (11min)

                    <button id = 'meditateBtn' onclick = 'startSwayInRain()' >  <span>PLAY</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>

                    </div>


                    <br>
                    <br>


                    <div class = 'catText'> Late Night Work (10min)

                    <button id = 'meditateBtn' onclick = 'startLateNightWork()' >  <span>PLAY</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>

                    </div>
                    <br>
                    <br>

                    
                                    <form  action = 'genreChooser/backToCateogory.php' method = 'post'>
                                    <div class = 'catBackText'> 
                                    
                                    <button type = 'submit' name = 'submit'>  <span>BACK TO CATGEGORIES</span>
                                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                                    </svg>
                                    </button>
                                    <br>
                                    <br>
                                    <div id = 'timerBox'>
                                    <div id='timeLeft'></div>
                                    </div>

                                    
                                    </div>
                                    </form>
                                    <br>

                                            ";

            } 







//ELSE NATURE

else if (isset($_GET['nature'])) {


    $title = "        
            <div id = 'category_title'>
            <span>Choose Music</span>
            </div>   
            ";

    $cat =  
            "   <div class = 'catText'> Sitting By The Canal (5min)

            <button id = 'meditateBtn' onclick = 'startSittingByCanal()' >  <span>PLAY</span>
            <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
            </svg>
            </button>
            
            </div>  

<br>
<br>


            <div class = 'catText'> Ocean Sensation (5min)

            <button id = 'meditateBtn' onclick = 'startOceanSensation()' >  <span>PLAY</span>
            <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
            </svg>
            </button>
            
            </div>  

            <br>
            <br>


            <div class = 'catText'> Light At The End (10min)

            <button id = 'meditateBtn' onclick = 'startLightAtTheEnd()' >  <span>PLAY</span>
            <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
            </svg>
            </button>
            
            </div>  
            <br>
            <br>



                                    <form  action = 'genreChooser/backToCateogory.php' method = 'post'>
                                    <div class = 'catBackText'> 
                                    
                                    <button type = 'submit' name = 'submit'>  <span>BACK TO CATGEGORIES</span>
                                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                                    </svg>
                                    </button>

                                    <br>
                                    <div id='timeLeft'></div>

                                    
                                    </div>
                                    </form>

                                    <br>

                                ";

            } 







// ELSE SUMMER
else if (isset($_GET['summer'])) {

    $title = "        
            <div id = 'category_title'>
            <span>Choose Music</span>
            </div>   
            ";


            $cat =  
                    " <div class = 'catText'> MOOD OPENER (5min)

                    <button id = 'meditateBtn' onclick = 'startMoodOpener()' >  <span>PLAY</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>

                    </div>

                    <br>
                    <br>


                    <div class = 'catText'> Fresh Garden Of Japan (12min)

                    <button id = 'meditateBtn' onclick = 'startFreshAuraJapan()' >  <span>PLAY</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>

                    </div>

                    <br>
                    <br>

                    <div class = 'catText'> Just Breathe (10min)

                    <button id = 'meditateBtn' onclick = 'startJustBreathe()' >  <span>PLAY</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>

                    </div>
                    <br>
                    <br>


                                    <form  action = 'genreChooser/backToCateogory.php' method = 'post'>
                                    <div class = 'catBackText'> 
                                    
                                    <button type = 'submit' name = 'submit'>  <span>BACK TO CATGEGORIES</span>
                                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                                    </svg>
                                    </button>
                                    <br>
                                    <br>
                                    <div id = 'timerBox'>
                                    <div id='timeLeft'></div>
                                    </div>

                                    
                                    </div>
                                    </form>
                                    <br>

                                            ";

            } 










// ELSE WINTER
else if (isset($_GET['winter'])) {

    $title = "        
            <div id = 'category_title'>
            <span>Choose Music</span>
            </div>   
            ";


            $cat =  
                    " <div class = 'catText'> The Humming Clouds(5min)

                    <button id = 'meditateBtn' onclick = 'startHummingClouds()' >  <span>PLAY</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>

                    </div>

                    
                    <br>
                    <br>



                    <div class = 'catText'> Flash Of Hope(5min)
                
                    <button id = 'meditateBtn' onclick = 'startFlashOfHope()' >  <span>PLAY</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>

                    </div>

                    <br>
                    <br>


                    <div class = 'catText'> Walk On White Dessert(12min)

                    <button id = 'meditateBtn' onclick = 'startWalkOnWhiteDessert()' >  <span>PLAY</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>

                    </div>

                    <br>
                    <br>



                                    <form  action = 'genreChooser/backToCateogory.php' method = 'post'>
                                    <div class = 'catBackText'> 
                                    
                                    <button type = 'submit' name = 'submit'>  <span>BACK TO CATGEGORIES</span>
                                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                                    </svg>
                                    </button>
                                    <br>
                                    <br>
                                    <div id = 'timerBox'>
                                    <div id='timeLeft'></div>
                                    </div>

                                    
                                    </div>
                                    </form>
                                    <br>


                                            ";

            } 


















// ELSE BREEZE
else if (isset($_GET['breeze'])) {

    $title = "        
            <div id = 'category_title'>
            <span>Choose Music</span>
            </div>   
            ";


            $cat =  
                    " <div class = 'catText'> STAR DUST (5min)

                    <button id = 'meditateBtn' onclick = 'startStarDust()' >  <span>PLAY</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>

                    </div>

                    <br>
                    <br>

                    <div class = 'catText'> Walk In The Sacred Forest (12min)

                    <button id = 'meditateBtn' onclick = 'startWalkInSacredForest()' >  <span>PLAY</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>

                    </div>
                    <br>
                    <br>


                    <div class = 'catText'> A Diamond In Space (7min)

                    <button id = 'meditateBtn' onclick = 'startDiamondInSpace()' >  <span>PLAY</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>

                    </div>
                    <br>
                    <br>

                                    <form  action = 'genreChooser/backToCateogory.php' method = 'post'>
                                    <div class = 'catBackText'> 
                                    
                                    <button type = 'submit' name = 'submit'>  <span>BACK TO CATGEGORIES</span>
                                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                                    </svg>
                                    </button>
                                    <br>
                                    <br>
                                    <div id = 'timerBox'>
                                    <div id='timeLeft'></div>
                                    </div>

                                    
                                    </div>
                                    </form>
                                    <br>

                                            ";

            } 





    //ELSE JUST CATEGORIES
else{
    $title = "        
            <div id = 'category_title'>
            <span>Select Category</span>
            </div>   
            ";

    $cat = 
                    "
                    <form  action = 'genreChooser/chooseNature.php' method = 'post'>
                    <div class = 'catText'> Nature 
                    
                    <button type = 'submit' name = 'submit'>  <span>BROWSE</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>
                    
                    </div>
                    </form>
                    <br>

                    
                    <form  action = 'genreChooser/chooseChill.php' method = 'post'>
                    <div class = 'catText'> Just Chill Vibes
                    
                    <button type = 'submit' name = 'submit'>  <span>BROWSE</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>
                    
                    </div>
                    </form>
                    
                    <br>

                    
                    
                    <form  action = 'genreChooser/chooseAmbient.php' method = 'post'>
                    <div class = 'catText'> Ambient Music 
                    
                    <button type = 'submit' name = 'submit'>  <span>BROWSE</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>
                    
                    </div>
                    </form>


                    <br>



                    <form  action = 'genreChooser/chooseSummer.php' method = 'post'>
                    <div class = 'catText'> Summer Sounds 
                    
                    <button type = 'submit' name = 'submit'>  <span>BROWSE</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>
                    
                    </div>
                    </form>



                    <br>




                    <form  action = 'genreChooser/chooseWinter.php' method = 'post'>
                    <div class = 'catText'> Winter Wonders
                    
                    <button type = 'submit' name = 'submit'>  <span>BROWSE</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>
                    
                    </div>
                    </form>
                    

                    <br>


                    <form  action = 'genreChooser/chooseBreeze.php' method = 'post'>
                    <div class = 'catText'> Breeze Refreshers
                    
                    <button type = 'submit' name = 'submit'>  <span>BROWSE</span>
                    <svg viewBox='-5 -5 110 110' preserveAspectRatio='none' aria-hidden='true'>
                        <path d='M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0'/>
                    </svg>
                    </button>
                    
                    </div>
                    </form>
                

<br>
<br>




                    
                "; 

        }


        //END OF IF STATEMENT
?>



<!DOCTYPE html>
<html>
<head>
	<title>Meditation</title>
    <link rel="stylesheet" href="cssFiles/meditate.css">
    <link rel="stylesheet" href="cssFiles/bubbleBackground.css">
    <link rel="stylesheet" href="cssFiles/meditateBtn.css">
 


</head>
<body>



    
    <div class="wrapper">

     

        <br>
        <br>


            <div id = 'main_title'>
            <span>MEDITATION</span>
            </div>   
            


        <br>
        <br>
        <br>





        <div class = 'bubble1'><span class="dot"></span></div>
        <div class = 'bubble2'><span class="dot"></span></div>
        <div class = 'bubble3'><span class="dot"></span></div>
        <div class = 'bubble4'><span class="dot"></span></div>
        <div class = 'bubble5'><span class="dot"></span></div>
        <div class = 'bubble6'><span class="dot"></span></div>
        <div class = 'bubble7'><span class="dot"></span></div>
        <div class = 'bubble8'><span class="dot"></span></div>
        <div class = 'bubble9'><span class="dot"></span></div>
        <div class = 'bubble10'><span class="dot"></span></div>
        <div class = 'bubble11'><span class="dot"></span></div>
        <div class = 'bubble12'><span class="dot"></span></div>
        <div class = 'bubble13'><span class="dot"></span></div>
        <div class = 'bubble14'><span class="dot"></span></div>
        <div class = 'bubble15'><span class="dot"></span></div>

   


<div id='containMusic'>

<span>
<?php echo $title;?>
<br>
<br>
<br>
<br>

<?php echo $cat;?>
    </span>
    </div>






    <div id = "container">

       <div id='meditateTxt'> Meditation has been scientifically proven to be one of the best strategies to both handling anxiety in the 
        short term and reducing it in the long term.
        </div>

    </div>
    
    <div id = "container2">
    <div id='meditateTxt2'>

        In fact in the short term alone meditation is shown to reduce anxiety levels up to 60% of the time. 
        Research from ScienceDirect finds that after meditating for between 6-9 months, almost two-thirds of
        individuals prone to anxiety have managed to reduce their overall anxiety levels.
<br>
<br>
        Research findings suggest that meditation techniques raise our dopamine levels. 
        Dopamine is a major hormone for positive mood regulations. It also
        holds a range of other benefits such as improved memory, focus, and problem-solving capabilities.
        Dopamine is also released when we exercise. 
      
    </div>
    </div>

    <div id = "container3">
    <div id='meditateTxt2'>

   They're a techniques which you can use to ensure your meditation gives you the optimum benefits for your health.
    A scientifically proven approach is the 3-3-3 rule. It involves simply looking around you and naming three things 
    that you see. Then naming three things that you hear. Then finally, moing three parts of you body. 
      
    </div>
    </div>


</div> 



<script type="text/javascript" src="js/meditate.js"></script>

</body>
</html>



