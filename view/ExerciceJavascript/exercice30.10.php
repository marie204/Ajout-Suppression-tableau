<!DOCTYPE html>
<html>
	<head>
		<title>exercice</title>
	</head>
	<body>
		<hi>
			Exercice 2 correction
		</hi>
		<p id="tempsRestant"></p>

		<script>
			var start = Date.now();
			start += 5*60*1000;

			function combienResteTIl(){
				var now = Date.now();
				var diff = start - now;
				if(diff < 0){
					clearInterval(monInterval);
					document.getElementById("tempsRestant").innerHTML = 'compteur à 0';


				} else {
					minute = Math.floor(diff/1000/60);
					heure = Math.floor(diff/1000/60/60)
					seconde = Math.floor(diff/1000)
				}


			}
		</script>


		<h1>Exercice 2</h1>
		<p id="demo"></p>
		<input type="button" onclick="ArrêterInternval();" value="Arrête!">
		<script>
			z = 0
			y = 34
			x = 00;
			intervalTest = setInterval(function(){Minuterie()}, 1000);
			
			function Minuterie(){
				if (x != 0) {
					x = x - 1;
					document.getElementById("demo").innerHTML = z+ ':'+ y +':' +x;
					
				}else {
					x = 59
					if(y!=0){
						y = y-1;
					} else{
						z = z-1;
						y =59;
					}
					
				}
				
			}
		function  ArrêterInternval(){
				clearInterval(intervalTest);
			}
		</script>

		

		<!-- <p id="receptacle"></p>
		mot: <input type="text" id="boutonMot">
		répétition: <input type="text" id="boutonRepeat">
		<input type="submit" onclick="fonctionRepeat();">
		
		<script>
			function fonctionRepeat(){
				n = 0;
				t = 0;
				a = document.getElementById("boutonRepeat").value;
				document.getElementById("receptacle").innerHTML = "";
				while (n != a) {
					document.getElementById("receptacle").innerHTML = document.getElementById("receptacle").innerHTML + document.getElementById("boutonMot").value+" ";
					n = n+1 ;
					t = t+1;
					if (t == 5) {
						document.getElementById("receptacle").innerHTML = document.getElementById("receptacle").innerHTML + '<br>';
						t = 0;
					}
				}
			}
		</script> -->
	</body>
</html>