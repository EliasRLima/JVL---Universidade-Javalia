function raybow(){
	document.getElementById('img-avatar').style.border = "3px solid rgb("+Math.floor(Math.random() * 155)+","+Math.floor(Math.random() * 155)+","+Math.floor(Math.random() * 155)+")";
	setTimeout(raybow,700);
}