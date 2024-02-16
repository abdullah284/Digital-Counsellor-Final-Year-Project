

//nature
var sittingByCanal = new Audio("audio/water.mp3");
var oceanSensation = new Audio("audio/music3.mp3");
var lightAtTheEnd = new Audio("audio/music4.mp3");

//chill
var vibrantThoughts = new Audio("audio/music8.mp3");
var roadToRadiance = new Audio("audio/music10.mp3");
var cityOfTech = new Audio("audio/music15.mp3");




//ambient
var lightHeartedPiano = new Audio("audio/lightpiano.mp3");
var swayInRain = new Audio("audio/music13.mp3");
var lateNightWork = new Audio("audio/music14.mp3");



//summer
var moodOpener = new Audio("audio/music5.mp3");
var freshAuraJapan = new Audio("audio/music12.mp3");
var justBreathe = new Audio("audio/music16.mp3");



//winter
var hummingClouds = new Audio("audio/music7.mp3");
var flashOfHope = new Audio("audio/music9.mp3");
var walkOnWhiteDessert = new Audio("audio/music11.mp3");




//breeze
var starDust = new Audio("audio/music6.mp3");
var walkInSacredForest = new Audio("audio/music17.mp3");
var diamondInSpace = new Audio("audio/music17.mp3");










/////////////////////////////////DIAMOND IN SPACE///////////////////////////

function startDiamondInSpace(){

  if(!diamondInSpace.paused){
    return;
  }


  starDust.pause()
  walkInSacredForest.pause()



  diamondInSpace.currentTime = 0 ;
  diamondInSpace.play();


  document.getElementById("timeLeft").innerHTML = 07 + ":" + 00;
  timerDiamondInSpace();

};



function timerDiamondInSpace() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    diamondInSpace.pause();
    return
  }
  
if (!diamondInSpace.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerDiamondInSpace, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////












/////////////////////////////////WALK IN SACRED FOREST////////////////////////////

function startWalkInSacredForest(){



  if(!walkInSacredForest.paused){
    return;
  }


  starDust.pause()
  diamondInSpace.pause()




  walkInSacredForest.currentTime = 0 ;
  walkInSacredForest.play();


  document.getElementById("timeLeft").innerHTML = 12 + ":" + 00;
  timerWalkInSacredForest();

};



function timerWalkInSacredForest() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    walkInSacredForest.pause();
    return
  }
  
if (!walkInSacredForest.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerWalkInSacredForest, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////















/////////////////////////////////JUST BREATHE/////////////////////////////

function startJustBreathe(){




  if(!justBreathe.paused){
    return;
  }


  freshAuraJapan.pause()
  moodOpener.pause()



  justBreathe.currentTime = 0 ;
  justBreathe.play();


  document.getElementById("timeLeft").innerHTML = 10 + ":" + 00;
  timerJustBreathe();

};



function timerJustBreathe() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    justBreathe.pause();
    return
  }
  
if (!justBreathe.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerJustBreathe, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////








//////////////////////////////////CITY OF TECH//////////////////////////////

function startCityOfTech(){



  if(!cityOfTech.paused){
    return;
  }


  vibrantThoughts.pause()
  roadToRadiance.pause()



  cityOfTech.currentTime = 0 ;
  cityOfTech.play();


  document.getElementById("timeLeft").innerHTML = 11 + ":" + 00;
  timerCityOfTech();

};



function timerCityOfTech() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    cityOfTech.pause();
    return
  }
  
if (!cityOfTech.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerCityOfTech, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////













//////////////////////////////////LATE NIGHT WORK///////////////////////////////////

function startLateNightWork(){



  if(!lateNightWork.paused){
    return;
  }


  lightHeartedPiano.pause()
  swayInRain.pause()



  lateNightWork.currentTime = 0 ;
  lateNightWork.play();


  document.getElementById("timeLeft").innerHTML = 10 + ":" + 00;
  timerLateNightWork();

};



function timerLateNightWork() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    lateNightWork.pause();
    return
  }
  
if (!lateNightWork.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerLateNightWork, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////














///////////////////////////////////SWAY IN THE RAIN///////////////////////////////////

function startSwayInRain(){

  

  if(!swayInRain.paused){
    return;
  }


  lightHeartedPiano.pause()
  lateNightWork.pause()



  swayInRain.currentTime = 0 ;
  swayInRain.play();


  document.getElementById("timeLeft").innerHTML = 11 + ":" + 00;
  timerSwayInRain();

};



function timerSwayInRain() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    swayInRain.pause();
    return
  }
  
if (!swayInRain.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerSwayInRain, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////









/////////////////////////////////////FRESH AURA JAOAN//////////////////////////////////////

function startFreshAuraJapan(){

 

  if(!freshAuraJapan.paused){
    return;
  }


  moodOpener.pause()
  justBreathe.pause()



  freshAuraJapan.currentTime = 0 ;
  freshAuraJapan.play();


  document.getElementById("timeLeft").innerHTML = 12 + ":" + 00;
  timerFreshAuraJapan();

};



function timerFreshAuraJapan() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    freshAuraJapan.pause();
    return
  }
  
if (!freshAuraJapan.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerFreshAuraJapan, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////












/////////////////////////////////////WALK ON WHITE DESSERT///////////////////////////////////////

function startWalkOnWhiteDessert(){




  if(!walkOnWhiteDessert.paused){
    return;
  }


  hummingClouds.pause()
  flashOfHope.pause()



  walkOnWhiteDessert.currentTime = 0 ;
  walkOnWhiteDessert.play();


  document.getElementById("timeLeft").innerHTML = 12 + ":" + 00;
  timerWalkOnWhiteDessert();

};



function timerWalkOnWhiteDessert() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    walkOnWhiteDessert.pause();
    return
  }
  
if (!walkOnWhiteDessert.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerWalkOnWhiteDessert, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////







/////////////////////////////////////ROAD TO RADIANCE////////////////////////////////////////

function startRoadToRadiance(){


  if(!roadToRadiance.paused){
    return;
  }


  vibrantThoughts.pause()
  cityOfTech.pause()



  roadToRadiance.currentTime = 0 ;
  roadToRadiance.play();


  document.getElementById("timeLeft").innerHTML = 05 + ":" + 00;
  timerRoadToRadiance();

};



function timerRoadToRadiance() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    roadToRadiance.pause();
    return
  }
  
if (!roadToRadiance.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerRoadToRadiance, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////

















/////////////////////////////////////VIBRANT THOUGHTS//////////////////////////////////////////

function startFlashOfHope(){

 

  if(!flashOfHope.paused){
    return;
  }


  hummingClouds.pause()
  walkOnWhiteDessert.pause()


  flashOfHope.currentTime = 0 ;
  flashOfHope.play();


  document.getElementById("timeLeft").innerHTML = 05 + ":" + 00;
  timerFlashOfHope();

};



function timerFlashOfHope() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    flashOfHope.pause();
    return
  }
  
if (!flashOfHope.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerFlashOfHope, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////












/////////////////////////////////////VIBRANT THOUGHTS//////////////////////////////////////////

function startVibrantThoughts(){



  if(!vibrantThoughts.paused){
    return;
  }


  roadToRadiance.pause()
  cityOfTech.pause()



  vibrantThoughts.currentTime = 0 ;
  vibrantThoughts.play();


  document.getElementById("timeLeft").innerHTML = 08 + ":" + 00;
  timerVibrantThoughts();

};



function timerVibrantThoughts() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    vibrantThoughts.pause();
    return
  }
  
if (!vibrantThoughts.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerVibrantThoughts, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////












//////////////////////////////////////MOOD OPENER/////////////////////////////////////////////

function startHummingClouds(){




  if(!hummingClouds.paused){
    return
  }


  flashOfHope.pause()
  walkOnWhiteDessert.pause()



  hummingClouds.currentTime = 0 ;
  hummingClouds.play();


  document.getElementById("timeLeft").innerHTML = 05 + ":" + 00;
  timerHummingClouds();

};



function timerHummingClouds() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    hummingClouds.pause();
    return
  }
  
if (!hummingClouds.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerHummingClouds, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////













//////////////////////////////////////MOOD OPENER/////////////////////////////////////////////

function startStarDust(){



  if(!starDust.paused){
    return
  }


  walkInSacredForest.pause()
  diamondInSpace.pause()



  starDust.currentTime = 0 ;
  starDust.play();


  document.getElementById("timeLeft").innerHTML = 05 + ":" + 00;
  timerStarDust();

};

function timerStarDust() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    starDust.pause();
    return
  }
  
if (!starDust.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerStarDust, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////













//////////////////////////////////////MOOD OPENER/////////////////////////////////////////////

function startMoodOpener(){



  if(!moodOpener.paused){
    return
  }


  freshAuraJapan.pause()
  justBreathe.pause()




  moodOpener.currentTime = 0 ;
  moodOpener.play();


  document.getElementById("timeLeft").innerHTML = 05 + ":" + 00;
  timerMoodOpener();

};

function timerMoodOpener() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    moodOpener.pause();
    return
  }
  
if (!moodOpener.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerMoodOpener, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////

















//////////////////////////////////////LIGHT AT THE END//////////////////////////////////////////////

function startLightAtTheEnd(){


  if(!lightAtTheEnd.paused){
    return;
  }

  sittingByCanal.pause()
  oceanSensation.pause()



  lightAtTheEnd.currentTime = 0 ;
  lightAtTheEnd.play();


  document.getElementById("timeLeft").innerHTML = 10 + ":" + 00;
  timerLightAtTheEnd();

};

function timerLightAtTheEnd() {



  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    lightAtTheEnd.pause();
    return
}
  
if (!lightAtTheEnd.paused){

  document.getElementById('timeLeft').innerHTML =
  m + ":" + s;
  console.log(m);
  myTimeout = setTimeout(timerLightAtTheEnd, 1000);
}
  
  
}
////////////////////////////////////////////////////////////////////////////////////




















//////////////////////////////////////OCEAN SENSATION//////////////////////////////////////////////

function startOceanSensation(){


  if(!oceanSensation.paused){
    return;
  }

  lightHeartedPiano.pause()
  sittingByCanal.pause()
  lightAtTheEnd.pause();

  oceanSensation.currentTime = 0 ;
  oceanSensation.play();


  document.getElementById("timeLeft").innerHTML = 05 + ":" + 00;
  timerOceanSensation();

};

function timerOceanSensation() {
  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    oceanSensation.pause();
    return
}
  

if (!oceanSensation.paused){

  document.getElementById('timeLeft').innerHTML =
    m + ":" + s;
  console.log(m);
  setTimeout(timerOceanSensation, 1000);
}
  
}
////////////////////////////////////////////////////////////////////////////////////













///////////////////////////////////////SITTING BY CANAL/////////////////////////////////////////////

function startSittingByCanal(){


  if(!sittingByCanal.paused){
    return;
  }

    oceanSensation.pause()
    lightAtTheEnd.pause();


    sittingByCanal.currentTime = 0 ;
    sittingByCanal.play();


    document.getElementById("timeLeft").innerHTML = 05 + ":" + 00;
    timerSittingByCanal();

};


function timerSittingByCanal() {
  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    sittingByCanal.pause();
    return
}


if (!sittingByCanal.paused){

document.getElementById('timeLeft').innerHTML =
m + ":" + s;
console.log(m);
setTimeout(timerSittingByCanal, 1000);
    }

}


  ////////////////////////////////////////////////////////////////////////////////////

  























///////////////////////////////////////LIGHT HEARTED PIANO////////////////////////////////////////////

function startLightHeartedPiano(){  

  if(!lightHeartedPiano.paused){
    return;
  }


  swayInRain.pause();
  lateNightWork.pause();





  lightHeartedPiano.currentTime = 0;
  lightHeartedPiano.play()

  document.getElementById("timeLeft").innerHTML = 5 + ":" + 00;
  timerLightHeartedPiano();

};


function timerLightHeartedPiano() {
  var presentTime = document.getElementById('timeLeft').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    lightHeartedPiano.pause()
    return
}


if (!lightHeartedPiano.paused){

  document.getElementById('timeLeft').innerHTML =
    m + ":" + s;
  console.log(m)
  setTimeout(timerLightHeartedPiano, 1000);
}

}


/////////////////////////////


















function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; 
  if (sec < 0) {sec = "59"};
  return sec;
}

