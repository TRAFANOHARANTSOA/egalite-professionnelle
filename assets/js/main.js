

var celia1info = document.getElementById('celia1-info');
var celia1Recom = document.getElementById('celia1-recomandation');


var celia2info = document.getElementById('celia2-info');
var celia2Recom = document.getElementById('celia2-recomandation');

var celia3info = document.getElementById('celia3-info');
var celia3Recom = document.getElementById('celia3-recomandation');

function openInfo1(){
    celia1info.classList.toggle("visible");
}
function openRecom1(){
    celia1Recom.classList.toggle("visible");
}

function openInfo2(){
    celia2info.classList.toggle("visible");
}
function openRecom2(){
    celia2Recom.classList.toggle("visible");
}

function openInfo3(){
    celia3info.classList.toggle("visible");
}
function openRecom3(){
    celia3Recom.classList.toggle("visible");
}

// Screen rotate landscape

document.addEventListener("DOMContentLoaded", (event) => {
    window.addEventListener("resize", detectOrientation) ;
    detectOrientation() ;
    });

var animation = document.getElementById("rotateScreen");
var content = document.getElementById("displayContent");


function detectOrientation(){

    if(window.orientation == 0){
        animation.style.display ="block";
    }else{
        animation.style.display = "none";
        content.style.display = "block";
    }
}

var tsiry1Ind = document.getElementById('widgettsiry22');
var tsiry1Icon = document.getElementById('widgettsiry21');
var tsiry1Par = document.getElementById('widgettsiry1');
var tsiry1Icon1 = document.getElementById('widgettsiry23');
function openIndTsiry1(){
    tsiry1Ind.style.visibility = ("visible");
    tsiry1Icon1.style.visibility = ("visible");
    tsiry1Par.style.display = "none";
}
function closeIndTsiry1(){
    tsiry1Par.style.display = "block";
    tsiry1Ind.style.visibility = ("hidden");
    tsiry1Icon1.style.visibility = ("hidden");
}


var tsiry2Ind = document.getElementById('widgettsiry7');
var tsiry2Img = document.getElementById('widgettsiry24');
function openTsiry2(){
  tsiry2Img.style.visibility = ("visible");
}
function closeTsiry2(){
tsiry2Img.style.visibility = ("hidden");
}

var tsiry3Ind = document.getElementById('widgettsiry10');
var tsiry3Img = document.getElementById('widgettsiry25');
var tsiry3Img1 = document.getElementById('widgettsiry26');
function openTsiry3(){
  tsiry3Img.style.visibility = ("visible");
  tsiry3Img1.style.visibility = ("visible");
}
function closeTsiry3(){
tsiry3Img.style.visibility = ("hidden");
tsiry3Img1.style.visibility = ("hidden");
}

var tsiry4Ind = document.getElementById('widgettsiry27');
var tsiry4Img = document.getElementById('widgettsiry28');

function openTsiry4(){
  tsiry4Img.style.visibility = ("visible");

}
function closeTsiry4(){
tsiry4Img.style.visibility = ("hidden");

}
