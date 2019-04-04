var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
var x = canvas.width/2;
var y = canvas.height-30;
var dx = 2;
var dy = -2;    
var ballRadius = 15;                            //hitbox ish
var paddleHeight = 10;                          //Paddle dimensions
var paddleWidth = 150;
var paddleX = (canvas.width-paddleWidth)/2;     //Position
var rightPressed = false;                       //KeyPress variabler
var leftPressed = false;

//draw
 

function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawPaddle();
    drawBall();
    drawBricks();
    collisionDetection();
    drawScore();
   
   
    
    x += dx;
    y += dy;
    
  if(rightPressed && paddleX < canvas.width-paddleWidth) {
    paddleX += 4;
} else if(leftPressed && paddleX > 0) {
    paddleX -= 4;
}
//övre väggen = reverse y
if(y + dy < 0) {            
    dy = -dy;
}
if(y + dy < ballRadius) {
    dy = -dy;


} else if(y + dy > canvas.height-ballRadius) {
    if(x > paddleX && x < paddleX + paddleWidth) {
        dy = -dy;
    }
   

}   //Höger/vänster Reverse X
if(x + dx > canvas.width-ballRadius || x + dx < 0) {           
    dx = -dx;
}
if(y + dy > canvas.height-ballRadius || y + dy < 0) {
    dy = -dy;
}

}




document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);

function keyDownHandler(e) {
//om höger pil är nedtryckt
    if(e.keyCode == 39) {
        rightPressed = true;            
    }
    else if(e.keyCode == 37) {
        leftPressed = true;
    }
}


function keyUpHandler(e) {
//om vänster pil är nedtryckt
    if(e.keyCode == 39) {
        rightPressed = false;          
    }
    else if(e.keyCode == 37) {
        leftPressed = false;
    }
}


      
             
    

 

function drawBall() {
    ctx.beginPath();
ctx.arc(x, y, ballRadius, 0, Math.PI*2);
    ctx.fillStyle = "black"
    ctx.fill();
    ctx.closePath();
}
//Rita ut paddle function
function drawPaddle() {         
    ctx.beginPath();
    ctx.rect(paddleX, canvas.height-paddleHeight, paddleWidth, paddleHeight);
    ctx.fillStyle = "black";
    ctx.fill();  
    ctx.closePath();
}




//uppdatera var 10 millisek
setInterval(draw, 1);    