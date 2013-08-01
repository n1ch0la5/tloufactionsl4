<!DOCTYPE html>
<html>
  
<head>
<meta charset="utf-8">
<meta content="Future Fan site for The Last of Us Multiplayer, Factions!" name="description">
<title>The Last of Us Multiplayer, Factions Fan Site</title>
 
<style>
    html{
         background: #111 !important;
    }
    body {
        margin: 0px;
        padding: 0px;
        background: transparent !important;
    }
    
    #container p{
        margin: 20px 0;
    }
    #container{
        width: 100%;
        padding: 20px 0;
        text-align: center;
        color: #ededed;
    }
    #myCanvas {
        margin: 0 auto;
      /* border: 1px dotted #ccc;
       background: #ededed;   
       */     
    }
</style>
 
<link rel="stylesheet" href="/css/normalize.css" />
  <link rel="stylesheet" href="/css/foundation.css" />

  <script src="/js/vendor/custom.modernizr.js"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2439701-12', 'tloufactions.com');
  ga('send', 'pageview');

</script>
</head>
 
<body>
    <div id="container">
        <canvas id="myCanvas" width="200" height="200">
        
            
        </canvas>
        <p>Coming soon.</p>
    </div>
 
    <script>

var mainCanvas = document.getElementById("myCanvas");
var mainCircle = mainCanvas.getContext('2d');
var mainClip = mainCanvas.getContext('2d');
var mainContext = mainCanvas.getContext('2d');

//bg vars
var xBg = mainCanvas.width / 2;
var yBg = mainCanvas.height / 2;
 
//user circle vars 
var circles = new Array();
var onlineUsers = 15;
var offlineUsers = 36;
 
 
//mainCircle.closePath();

//clipping circle
mainClip.beginPath();
mainClip.arc(xBg,yBg,100,0,2*Math.PI);
mainClip.clip();
mainClip.restore();

//mainClip.stroke();
//mainClip.lineWidth = 15;
//mainClip.fillStyle = "#000000";
//mainClip.fill();
//mainClip.beginPath();
//mainClip.arc(50, 50, 100px, 0, Math.PI * 2, false);
//mainClip.fillStyle = "#ffffff";
//mainClip.closePath();


var requestAnimationFrame = window.requestAnimationFrame || 
                            window.mozRequestAnimationFrame ||
                            window.webkitRequestAnimationFrame ||
                            window.msRequestAnimationFrame;
 
 
function Circle(radius, speed, width, xPos, yPos, color) {
    this.radius = radius;
    this.speed = speed;
    this.width = width;
    this.xPos = xPos;
    this.yPos = yPos;
    //this.opacity = .05 + Math.random() * .5;
    this.opacity = 1;
    this.color = color;

    this.counter = 0;
 
    var signHelper = Math.floor(Math.random() * 2);
 
    if (signHelper == 1) {
        this.sign = -1;
    } else {
        this.sign = 1;
    }
}
 
Circle.prototype.update = function () {
    this.counter += this.sign * this.speed;
 
    mainContext.beginPath();
    mainContext.arc(this.xPos + Math.cos(this.counter / 100) * this.radius, 
                    this.yPos + Math.sin(this.counter / 100) * this.radius, 
                    this.width, 
                    0, 
                    Math.PI * 2,
                    false);
                     
    mainContext.closePath();
 
    mainContext.fillStyle = 'rgba(' + this.color + this.opacity + ')';
    mainContext.fill();
};
 
function setupCircles() {
    //grey circles (offline users)
    for (var i = 0; i < offlineUsers; i++) {
        var randomX = Math.round(Math.random() * 180);
        var randomY = Math.round(Math.random() * 180);
        //var randomX = Math.round(-5 + Math.random() * 230);
        //var randomY = Math.round(-5 + Math.random() * 230);
        //var speed = .2 + Math.random() * 3;
        //var size = 5 + Math.random() * 100;
        var speed = .25;
        var size = 5;
        var radius = Math.random() * 50;
       //var radius = 50 + Math.random() * 100;
        var color = '167, 167, 167,';
        
        var circle = new Circle(radius, speed, size, randomX, randomY, color);
        circles.push(circle);
    }
    //blue circles (online users)
    for (var i = 0; i < onlineUsers; i++) {
        var randomX = Math.round(Math.random() * 200);
        var randomY = Math.round(Math.random() * 200);
        //var speed = .2 + Math.random() * 3;
        //var size = 5 + Math.random() * 100;
        var speed = .25;
        var size = 7;
        var radius = Math.random() * 50;
       //var radius = 50 + Math.random() * 100;
        var color = '104, 180, 221,';
        
        var circle = new Circle(radius, speed, size, randomX, randomY, color);
        circles.push(circle);
    }
    drawAndUpdate();
}
setupCircles();
 
function drawAndUpdate() {
    mainContext.clearRect(0, 0, 200, 200);
    
    //bg circle
    mainCircle.beginPath();
    mainCircle.arc(xBg,yBg,100,0,2*Math.PI);
    mainCircle.fillStyle = "#7c8b91";
    mainCircle.fill();

    for (var i = 0; i < circles.length; i++) {
     
        var myCircle = circles[i];
        myCircle.update();
    }
     
    requestAnimationFrame(drawAndUpdate);
}

    </script>
</body>
 
</html>