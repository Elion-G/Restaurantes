<!DOCTYPE html>
<html>
<head>
	<title>Vista de espera por mantenimiento</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}
		.container {
			max-width: 600px;
			margin: 0 auto;
			text-align: center;
			padding: 50px;
		}
		h1 {
			font-size: 36px;
			margin-bottom: 20px;
			color: #d34e4e;
			text-shadow: 1px 1px #ddd;
		}
		.restaurant-icon {
			display: block;
			margin: 0 auto;
			font-size: 100px;
			color: #d34e4e;
			text-shadow: 1px 1px #ddd;
		}
		.text {
			font-size: 24px;
			margin-bottom: 20px;
			color: #666;
			text-shadow: 1px 1px #ddd;
		}
		.clock {
			font-size: 48px;
			margin-bottom: 20px;
			color: #666;
			text-shadow: 1px 1px #ddd;
		}
		.btn {
			background-color: #d34e4e;
			color: #fff;
			padding: 10px 20px;
			border-radius: 5px;
			text-decoration: none;
			font-size: 18px;
			transition: background-color 0.2s ease;
			cursor: pointer;
			display: inline-block;
			margin-top: 20px;
		}
		.btn:hover {
			background-color: #b13e3e;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Mantenimiento en progreso</h1>
		<span class="restaurant-icon">&#127860;</span>
		<p class="text">Lo sentimos, nuestro restaurante está cerrado temporalmente por mantenimiento. Estamos trabajando para volver a estar en línea lo antes posible.</p>
		<div class="clock">Tiempo restante: <span id="countdown"></span></div>
		<a href="#" class="btn">Volver pronto</a>
	</div>
	
	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("Apr 8, 2023 12:00:00").getTime();

		// Update the countdown every 1 second
		var x = setInterval(function() {

		  // Get today's date and time
		  var now = new Date().getTime();
		    
		  // Find the distance between now and the countdown date
		  var distance = countDownDate - now;
		    
		  // Time calculations for days, hours, minutes and seconds
		  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		    
		  // Display the countdown
		  document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s";
              // If the countdown is finished, show a message
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "Expirado";
                }
            }, 1000);
    </script>
</body>
</html>
