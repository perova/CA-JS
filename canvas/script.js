canvas = document.getElementById('canvas');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// canvas.width = window.innerWidth -3;
// canvas.height = 600;

var c = canvas.getContext("2d");

// c.fillReact(100, 100, 100, 100);
// c.fillReact(400, 100, 100, 100);
// c.fillReact(300, 300, 100, 100);

//c.beginPath();
// c.moveTo(100,100);
// c.lineTo(300,100);
// c.stroke()
//w-h

// c.moveTo(50,150);
// c.lineTo(200,50);
// c.lineTo(400,150);
// c.lineTo(400,400);
// c.lineTo(50, 400);
// c.lineTo(50, 150);
// c.lineTo(400,150);
// c.fillStyle = '#42c5f4';
// c.fill()
// c.stroke()


// canvas.width = window.innerWidth;
// canvas.height = window.innerHeight;

for (var i=0; i < 10; i++){

	var x = Math.random() * window.innerWidth;
	var y = Math.random() * window.innerHeight;


	var r = Math.floor(Math.random()*255);
	var g = Math.floor(Math.random()*255);
	var b = Math.floor(Math.random()*255);

	c.beginPath();
	c.arc(x,y,20,0,2 * Math.PI);
	c.fillStyle = "rgb(" + r + "," + g + "," + b + ")";
	c.fill();

	

}