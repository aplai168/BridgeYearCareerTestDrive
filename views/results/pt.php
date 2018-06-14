<div class = "container" style = "padding-top: 50px;">
	<?php foreach ($data['results'] as $patient) {?>
		<div class = "panel panel-default">
			<div class = "panel-body">
				<h3 style = "text-align: center;">Patient: <?php echo $patient[0];?></h3>
				<div class = "row">
					<div class = "col-md-6">
						<h4 style = "text-align: center;">Your Answer</h4>
						<h1 style = "text-align: center;"><big><big><?php echo $patient[1];?></big></big></h1>
					</div>
					<div class = "col-md-6">
						<h4 style = "text-align: center;">Correct Answer</h4>
						<h1 style = "text-align: center;"><big><big><?php echo $patient[2];?></big></big></h1>
					</div>
				</div>
				<div class = "row">
					<?php if ($patient[3] == 1) {echo '<h2 class = "bg-success" style = "text-align: center;">Congratulations. You got it right.</h2>';} ?>
				</div>
			</div>
		</div>
		<hr>
	<?php }?>
</div>