
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<script>
				dernierX = 0;
					dernierY = 0;

$(document).ready(function(){
    $('myCanvas').mousemove(function(){
    	console.log('hoy');
        var c = document.getElementById("myCanvas");
		var ctx = c.getContext("2d");
		ctx.moveTo(0,0);
		ctx.lineTo(200,100);
		ctx.stroke();
    });
});
</script>
</head>
<body>

<canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;">

</body>
</html>



<!-- <script>
				
			document.getElementById("myCanvas").mousemove(fonctionDessin());


			function fonctionDessin(){
				var c = document.getElementById("myCanvas");
				var ctx = c.getContext("2d");
				ctx.moveTo(dernierX, dernierY);
				ctx.lineTo(200,100);
				ctx.stroke();
			}



		</script> -->

		<!--<script>
			/*dernierX = 0;
			dernierY = 0;
		document.getElementById("myCanvas").mousemove(fonctionDessin());
			function fonctionDessin(event){
			console.log(event);
			var c = document.getElementById("myCanvas");
			var ctx = c.getContext("2d");
			ctx.moveTo(dernierX, dernierY);
			ctx.lineTo(event.clientX, event.clientY);
			ctx.strokeStyle = '#909090';
			ctx.lineWidth = 10;
			ctx.stroke();
			dernierX = event.clientX;
			dernierY = event.clientY;
		}*/</script>-->
	