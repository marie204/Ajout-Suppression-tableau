<!DOCTYPE html>
<html>
	<head>
		<title>canvas</title>
	</head>
	<body>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<canvas id="myCanvas" width="200" height="200" style="border:1px solid #000000;">
		</canvas>
		<script>
			dernierX = 0;
			dernierY = 0;
		document.getElementById("myCanvas").mousemove(fonctionDessin());
			function fonctionDessin(){
			console.log(event);
			var c = document.getElementById("myCanvas");
			var ctx = c.getContext("2d");
			ctx.moveTo(dernierX, dernierY);
			ctx.lineTo(event.clientX, event.clientY);
			ctx.strokeStyle = '#000000';
			ctx.lineWidth = 10;
			ctx.stroke();
			dernierX = event.clientX;
			dernierY = event.clientY;
		}
		</script>
	</body>
</html>