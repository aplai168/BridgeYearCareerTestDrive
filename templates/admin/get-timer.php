<?php if (is_array($data['times'])) {?>
	<script type="text/javascript">
		function timer(myid, endtime) {
			var now = new Date().getTime();
			var distance = Math.abs(new Date() - new Date(endtime.replace(/-/g,'/')));

			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			document.getElementById(myid).innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
			if (distance < 0) {
				document.getElementById(myid).innerHTML = "EXPIRED";
			}
		}
	</script>
	<?php foreach ($data['times'] as $timer) {?>
	<div class = "row">
		<div class = "col-md-12">	
			<h3 style = "text-align: center; vertical-align: middle;"><?php echo $timer['name'];?></h3>
			<h1 style = "text-align: center; vertical-align: middle;" id = "<?php echo $timer['timerid'];?>"></h1>
			<div class = "container" style = "text-align: center;">
				<form action = "" method = "POST">
					<input type = "hidden" name = "timerid" value = "<?php echo $timer['timerid'];?>">
					<button class = "btn btn-primary" name = "deleteTimer">Delete Timer</button>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		setInterval(timer, 500, "<?php echo $timer['timerid'];?>","<?php echo $timer['stop'];?>");
	</script>
	<?php }?>
<?php } else {?>
	<h2 style = "text-align: center;">No Times have been set</h2>
<?php } ?>