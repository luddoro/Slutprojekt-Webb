var score = 0;

function drawScore() {
    ctx.font = "16px Georgia";
    ctx.fillStyle = "black";
    ctx.fillText("Score: " + score, 8, 20  );
}