<br>
<div class = "container">
	<div class = "row">
		<div class = "col-md-7">
			<img class = "img-responsive img-rounded" style = "width: 700px; height: 300px;" src = "img/brbr.jpg">
		</div>
		<div class = "col-md-5">	
			<h3 style = "text-align: center; vertical-align: middle;">Countdown to Baker Ripley</h3>
			<h1 style = "text-align: center; vertical-align: middle;" id = "date"></h1>
			<p></p>
		</div>
	</div>
	<script type="text/javascript">
		var countdowntime1 = new Date("July 29, 2017 9:00:00").getTime();
		var x = setInterval(function(){
			var now = new Date().getTime();
			var distance = countdowntime1 - now;

			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  		var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	  		document.getElementById("date").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
	  		if (distance < 0) {
	    		clearInterval(x);
	   			document.getElementById("date").innerHTML = "EXPIRED";
	  		}
		}, 100);
	</script>
</div>
<hr>
<div class = "container">
	<div class = "row">
		<div class = "col-md-5">	
			<h3 style = "text-align: center; vertical-align: middle;">Countdown to BridgeYear Open House</h3>
			<h1 style = "text-align: center; vertical-align: middle;" id = "date2"></h1>
			<p></p>
		</div>
		<div class = "col-md-7">
			<img class = "img-responsive img-rounded" style = "width: 700px; height: 300px;" src = "img/bylogo.jpg">
		</div>
	</div>
	<script type="text/javascript">
		var countdowntime2 = new Date("August 3, 2017 16:00:00").getTime();
		var y = setInterval(function(){
			var now = new Date().getTime();
			var distance2 = countdowntime2 - now;

			var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));
	  		var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  		var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
	  		var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);

	  		document.getElementById("date2").innerHTML = days2 + "d " + hours2 + "h " + minutes2 + "m " + seconds2 + "s ";
	  		if (distance2 < 0) {
	    		clearInterval(x);
	   			document.getElementById("date2").innerHTML = "EXPIRED";
	  		}
		}, 100);
	</script>
</div>