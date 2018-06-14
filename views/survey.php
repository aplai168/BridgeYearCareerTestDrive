<div class = "container">
	<div class = "jumbotron">
		<h2 style = "text-align: center;">The BridgeYear Survey</h2>
		<p>This survey is for students to see which career test drives they may be interested in.</p>
	</div>
	<div class = "well" style = "background-color: #eeeeee;">
		<form action = "index.php?m=/survey/submit<?php if (isset($data['survey_id'])){ echo '/'.$data['survey_id'];}?>" method = "POST">
			<div class = "row">
				<div class = "col-md-6">
					<h4 style = "text-align: center;">Rank Medical Lab Technician Career</h4>
				</div>
				<div class = "col-md-6">
					<select class = "form-control" id = "career1">
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
						<option value = "6">6</option>
						<option value = "7">7</option>
						<option value = "8">8</option>
						<option value = "9">9</option>
						<option value = "10">10</option>
					</select>
				</div>
			</div>
			<hr>
			<div class = "row">
				<div class = "col-md-6">
					<h4 style = "text-align: center;">Rank Pharmacy Technician Career</h4>
				</div>
				<div class = "col-md-6">
					<select class = "form-control" id = "career2">
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
						<option value = "6">6</option>
						<option value = "7">7</option>
						<option value = "8">8</option>
						<option value = "9">9</option>
						<option value = "10">10</option>
					</select>
				</div>
			</div>
			<hr>
			<div class = "row">
				<div class = "col-md-6">
					<h4 style = "text-align: center;">Rank Medical Billing and Coding Career</h4>
				</div>
				<div class = "col-md-6">
					<select class = "form-control" id = "career3">
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
						<option value = "6">6</option>
						<option value = "7">7</option>
						<option value = "8">8</option>
						<option value = "9">9</option>
						<option value = "10">10</option>
					</select>
				</div>
			</div>
			<hr>
			<div class = "row">
				<div class = "col-md-6">
					<h4 style = "text-align: center;">Rank Web Development Career</h4>
				</div>
				<div class = "col-md-6">
					<select class = "form-control" id = "career4">
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
						<option value = "6">6</option>
						<option value = "7">7</option>
						<option value = "8">8</option>
						<option value = "9">9</option>
						<option value = "10">10</option>
					</select>
				</div>
			</div>
			<hr>
			<div class = "row">
				<div class = "col-md-6">
					<h4 style = "text-align: center;">Rank Electrician Career</h4>
				</div>
				<div class = "col-md-6">
					<select class = "form-control" id = "career5">
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
						<option value = "6">6</option>
						<option value = "7">7</option>
						<option value = "8">8</option>
						<option value = "9">9</option>
						<option value = "10">10</option>
					</select>
				</div>
			</div>
			<hr>
			<div class = "row">
				<div class = "col-md-6">
					<h4 style = "text-align: center;">Rank Process Technician Career</h4>
				</div>
				<div class = "col-md-6">
					<select class = "form-control" id = "career6">
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
						<option value = "6">6</option>
						<option value = "7">7</option>
						<option value = "8">8</option>
						<option value = "9">9</option>
						<option value = "10">10</option>
					</select>
				</div>
			</div>
			<hr>
			<div class = "row" style = "text-align: center;">
				<button class = "btn btn-primary">Submit Form</button>
			</div>
		</form>
	</div>
</div>