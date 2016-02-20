
function rotar(value)  {
		
    
var total = total + value; 
    
    drawRotated(value);
		
	};

	function drawRotated(value){
        
        var imgOriginal = 'house.png';
  //      var vRotate = imgOriginal.getAttribute('rotate');
	var canvas=document.createElement("canvas");
	canvas.width = 300;
	canvas.height= 300;
	var ctx = canvas.getContext("2d");
	ctx.translate(canvas.width/2,canvas.height/2);
	// cria imagem inicial
	var image = document.createElement("img");
	image.src = imgOriginal;
	//document.body.appendChild(image);

		// limpa canvas, rotaciona e desenha imagem no centro
	    ctx.clearRect(-canvas.width,-canvas.height,canvas.width*2,canvas.height*2);
	    ctx.rotate(value *Math.PI/180);
	    ctx.drawImage(image,-image.width/2,-image.width/2);
	    // cria nova imagem no html
	    var img = document.createElement('img');
	    img.src = canvas.toDataURL("image/png");
		document.body.appendChild(img);
	}
