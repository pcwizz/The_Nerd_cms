window.addEventListener("load", anchor_paint, false);
function anchor_paint(){
var x = document.getElementById('canvas');
canvas = x.getContext('2d');
var b = document.getElementById('b');
var bb = document.getElementById('bb');

x.addEventListener("click", draw, false);
b.addEventListener("click", dl, false);
bb.addEventListener("click", save, false);
}

	
function draw(e){
var xPos = e.clientX;
var yPos = e.clientY;
var imageObj = new Image();
 imageObj.src = "anchor.gif";
        context.drawImage(imageObj, xPos, Ypos, 30, 30);
    
};
}
function dl(){
canvas.clearRect(0, 0, 690, 690);
}
function save(){
var can = document.getElementById('canvas');
var img = can.toDataURL("image/png");
document.write('<img src="'+img+'"/><a href="anchor_paint">back to anchor_paint</a>');
}
