canvas = document.getElementById('canvas');











function Box(x,y,w,h){

	this.x =x;
	this.y = y;
	this.w = w;
	this.h = h;

	this.update = function(dx,dy){

		this.dx += dx;
		this.dy += dy;
		this.draw();

	}
	this.draw=function(){
		c.beginPath();
		c.rect(this.x, this.y,this.w,this.h);
		c.fillStyle = "black";
		c.fill();
	}
}