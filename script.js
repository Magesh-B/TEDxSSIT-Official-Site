var cubex = -22,    // initial rotation
cubey = -38,
cubez = 0;
function rotate(variableName, degrees) {
    window[variableName] = window[variableName] + degrees;
    rotCube(cubex, cubey, cubez);
}
function rotCube(degx, degy, degz){
    segs = "rotateX("+degx+"deg) rotateY("+degy+"deg) rotateZ("+degz+"deg) translateX(0) translateY(0) translateZ(0)";
    $('#D3Cube').css({"transform":segs});
}
function turnRight() {
    rotate("cubey", 90);
}
function turnLeft() {
    rotate("cubey", -90);
}
function flipCube() {
    rotate("cubez", -180);
}
function flipCubeDown() {
    rotate("cubez", 180);
}

var prevNumber;
var randomNum;

function check()
{
prevNumber;
randomNum = Math.floor(Math.random()*4);
//console.log(randomNum);
if(prevNumber!==randomNum)
{
    prevNumber==randomNum;
    if (randomNum===0)
    {
        turnRight();
    }
    else if(randomNum===1)
    {
        turnLeft();
    }
    else if(randomNum===2)
    {
        flipCubeDown();
    }
    else
    {
        flipCube();
    }
}
    //window.setInterval(check,2500);
}

function cubeInterval()
{
    setInterval(check,2500);
}

$(window).on('load',function(){
    //check();
    cubeInterval();
  });

  var toggler=0;
  //Hamburger Menu
  function menuFunction(x) {
    x.classList.toggle("change");
    if(toggler===0)
    {
    openNav();
    toggler=1;
    }
    else{
        closeNav();
        toggler=0;
    }
  }
/* 
  //Side Nav Right
  function openNav() {
    document.getElementById("mySidenav").style.width = "30%";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  } */


  //Side Nav Right Updated
 function openNav() {
    document.getElementById("mySidenav").classList.add('classWidth');
  }
  
  function closeNav() {
    document.getElementById("mySidenav").classList.remove('classWidth');
  }