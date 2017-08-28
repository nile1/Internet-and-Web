

	

function myTriangle(){
	var base = prompt("Enter Base of triangle", "2");
	var height = prompt("Enter Height of triangle", "3");
	var side = prompt("Enter  side1 of triangle", "5");
	var side = prompt("Enter  side2 of triangle", "2");
	document.getElementById("area").innerHTML = "Area : "+  0.5*base*height;
	document.getElementById("per").innerHTML = "permimeter : "+  height+base+side;

	var c = document.getElementById('myCanvas');

	    var ctx= c.getContext('2d');
	    ctx.clearRect(0, 0, c.width, c.height);
	    ctx.beginPath();
	    ctx.moveTo(300, 100);
		ctx.lineTo(400, 100*2.73);
		ctx.lineTo(200, 100*2.73);
		ctx.lineTo(300, 100);
		ctx.stroke();
	    ctx.fillStyle = "white";
	    ctx.fill();         

}

function myCircle(){


	var radius = prompt("Enter radius of circle", "3");
	document.getElementById("area").innerHTML = "Area : "+ 3.14*radius*radius;
	document.getElementById("per").innerHTML = "permimeter : "+  (3.14*2*radius);

	var c = document.getElementById("myCanvas");
	var ctx = c.getContext("2d");
	ctx.clearRect(0, 0, c.width, c.height);
	ctx.beginPath();
	ctx.arc(300, 150, radius, 0, 2 * Math.PI);
	ctx.stroke();
	ctx.fillStyle = "white";
	ctx.fill();




}

function myRectangle(){
	var height = prompt("Enter Height of reactangle", "3");
	var width = prompt("Enter Breath of reactangle", "5");

	document.getElementById("area").innerHTML = "Area is: "+  height*width;
	document.getElementById("per").innerHTML = "permimeter is: "+ (2*height+2*width);
	
	var c = document.getElementById('myCanvas');
	var ctx = c.getContext('2d');
	ctx.clearRect(0, 0, c.width, c.height);
	ctx.beginPath();
	ctx.rect(200,100,height,width);
	ctx.stroke();
	ctx.fillStyle = "white";
	ctx.fill();
	
}
function mySquare(){
	
	var c = document.getElementById("myCanvas");
	var ctx = c.getContext("2d");
	ctx.clearRect(0, 0, c.width, c.height);
	var side = prompt("Enter Side of Square", "3");
	document.getElementById("area").innerHTML = "Area is  "+side*side;
	document.getElementById("per").innerHTML = "Permimeter is  "+ 4*side;
var c = document.getElementById("myCanvas");
	var ctx = c.getContext("2d");
	ctx.clearRect(0, 0, c.width, c.height);

	
	ctx.beginPath();
	ctx.rect(100,100,side,side);
	ctx.stroke();
	ctx.fillStyle = "white";
	ctx.fill();
	
}

function myHex(){
	var c = document.getElementById("myCanvas");
	var ctx = c.getContext("2d");
	ctx.clearRect(0, 0, c.width, c.height);
	var size = prompt("Enter Side of Hex", "150");
	document.getElementById("area").innerHTML = "Area is  "+size*size*(3/2)*1.73;
	document.getElementById("per").innerHTML = "Permimeter is  "+ 6*size;
	var c = document.getElementById("myCanvas");
	var ctx = c.getContext("2d");
	ctx.clearRect(0, 0, c.width, c.height);
	ctx.beginPath();
	 var side = 0;
     
	ctx.moveTo(300 + size * Math.cos(0), 200 + size * Math.sin(0));
	for (side; side < 7; side++) {
		ctx.lineTo(300 + size * Math.cos(side * 2 * Math.PI / 6), 200 + size * Math.sin(side * 2 * Math.PI / 6));
	}
	ctx.stroke();
    ctx.fillStyle = "white";
    ctx.fill();
	    	    
		
}