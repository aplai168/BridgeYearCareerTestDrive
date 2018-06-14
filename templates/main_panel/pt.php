<form action = "?m=/results/Pharmacy_Technician" method = "POST">
<div style = "padding-top: 50px;">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" id = "patientOneTab" class="active"><a href="#patientOne" aria-controls="patientOne" role="tab" data-toggle="tab">Alexander Luna</a></li>
    <li role="presentation" id = "patientFiveTab" class = "disabledTab"><a href="#patientFive" aria-controls="patientFive" role="tab" data-toggle="tab">Mattie Burke</a></li>
    <li role="presentation" id = "patientThreeTab" class = "disabledTab"><a href="#patientThree" aria-controls="patientThree" role="tab" data-toggle="tab">Gerard Hines</a></li>
    <li role="presentation" id = "patientSevenTab" class = "disabledTab"><a href="#patientSeven" aria-controls="patientSeven" role="tab" data-toggle="tab">Bernadette Gray</a></li>
    <li role="presentation" id = "patientTwoTab" class = "disabledTab"><a href="#patientTwo" aria-controls="patientTwo" role="tab" data-toggle="tab" >Matt Floyd</a></li>
    <li role="presentation" id = "patientSixTab" class = "disabledTab"><a href="#patientSix" aria-controls="patientSix" role="tab" data-toggle="tab">Shelia Doyle</a></li>
    <li role="presentation" id = "patientFourTab" class = "disabledTab"><a href="#patientFour" aria-controls="patientFour" role="tab" data-toggle="tab">Roman Goodman</a></li>    
    <li role="presentation" id = "patientEightTab" class = "disabledTab"><a href="#patientEight" aria-controls="patientEight" role="tab" data-toggle="tab" >Terrance George</a></li>
    <button class = "btn btn-default">Submit Answers</button>
  </ul>

  <!-- Tab panes -->
  <input type = "hidden" name = "sim" value = "pt">
  <div class = "container">
	  <div class = "row">
	  	<h2 id = "progress" style = "text-align: center;">Progress: 0/8 Patients Filled</h2>
	  </div>
  </div>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="patientOne">
    	<div class = "container">
	    	<div class = "well">
				<h3 style = "text-align: center;">Dr. Jasmine Cantu and Associates</h3>
				<p style = "text-align: center;">518 Shepherd Drive | Houston, Texas, 77007</p>
				<p style = "text-align: center;">Phone Number: (281)-305-0989 | Fax Number: (281)-305-0982</p>
				<div class = "row">
					<div class = "col-md-6">
						<div class = "well whiten">Patient Name: Alexander Luna</div>
					</div>
					<div class = "col-md-6">
						<div class = "well whiten">Date Prescribed: 06/06/17</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten">
							Patient Address: 782 Blossom Street, Houston, TX, 77007
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten" style = "text-align: center;">
							<h4>Perscription: hydrocodone 10mg</h4>
							<h4>Take 1 dose every 24 hours for one week</h4>
							<h4>Urgency: Low</h4>
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-3">
						<p>Number of Pills:</p>
					</div>
					<div class = "col-md-3">
						<input type = "number" name = "patientOnePillCount" id = "patientOnePillCount" class = "form-control" placeholder="Insert Number of Pills Here" value = "0">
					</div>
					<div class = "col-md-3">
						Doctor: Lily Martinez
					</div>
					<div class = "col-md-3">
						<img class = "img-responsive" src="img/submitimg.png" onclick="deToggle(['patientFiveTab'])">
					</div>
				</div>
			</div>
	    </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="patientTwo">
    	<div class = "container">
	    	<div class = "well">
				<h3 style = "text-align: center;">Dr. Jasmine Cantu and Associates</h3>
				<p style = "text-align: center;">518 Shepherd Drive | Houston, Texas, 77007</p>
				<p style = "text-align: center;">Phone Number: (281)-305-0989 | Fax Number: (281)-305-0982</p>
				<div class = "row">
					<div class = "col-md-6">
						<div class = "well whiten">Patient Name: Matt Floyd</div>
					</div>
					<div class = "col-md-6">
						<div class = "well whiten">Date Prescribed: 05/29/17</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten">
							Patient Address: 1001 Main Street, Houston, TX, 77004
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten" style = "text-align: center;">
							<h4>Perscription: zestril 10mg</h4>
							<h4>Take 1 dose PO for 1 week</h4>
							<h4>Urgency: Low</h4>
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-3">
						<p>Number of Pills:</p>
					</div>
					<div class = "col-md-3">
						<input type = "number" name = "patientTwoPillCount" id = "patientTwoPillCount" class = "form-control" placeholder="Insert Number of Pills Here" value = "0">
					</div>
					<div class = "col-md-3">
						Doctor: Jasmine Cantu
					</div>
					<div class = "col-md-3">
						<img class = "img-responsive" src="img/submitimg.png" onclick="deToggle(['patientFourTab'])">
					</div>
				</div>
			</div>
		</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="patientThree">
    	<div class = "container">
	    	<div class = "well">
				<h3 style = "text-align: center;">Dr. Jasmine Cantu and Associates</h3>
				<p style = "text-align: center;">518 Shepherd Drive | Houston, Texas, 77007</p>
				<p style = "text-align: center;">Phone Number: (281)-305-0989 | Fax Number: (281)-305-0982</p>
				<div class = "row">
					<div class = "col-md-6">
						<div class = "well whiten">Patient Name: Gerard Hines</div>
					</div>
					<div class = "col-md-6">
						<div class = "well whiten">Date Prescribed: 06/03/17</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten">
							Patient Address: 7404 Beechnut Street, Houston, TX, 77074
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten" style = "text-align: center;">
							<h4>Perscription: lisinopril 5mg</h4>
							<h4>orally, sid, 2 wks</h4>
							<h4>Urgency: High</h4>
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-3">
						<p>Number of Pills:</p>
					</div>
					<div class = "col-md-3">
						<input type = "number" name = "patientThreePillCount" id = "patientThreePillCount" class = "form-control" placeholder="Insert Number of Pills Here" value = "0">
					</div>
					<div class = "col-md-3">
						Doctor: Lily Martinez
					</div>
					<div class = "col-md-3">
						<img class = "img-responsive" src="img/submitimg.png" onclick="deToggle(['patientTwoTab','patientSixTab'])">
					</div>
				</div>
			</div>
		</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="patientFour">
    	<div class = "container">
	    	<div class = "well">
				<h3 style = "text-align: center;">Dr. Jasmine Cantu and Associates</h3>
				<p style = "text-align: center;">518 Shepherd Drive | Houston, Texas, 77007</p>
				<p style = "text-align: center;">Phone Number: (281)-305-0989 | Fax Number: (281)-305-0982</p>
				<div class = "row">
					<div class = "col-md-6">
						<div class = "well whiten">Patient Name: Roman Goodman</div>
					</div>
					<div class = "col-md-6">
						<div class = "well whiten">Date Prescribed: 06/10/17</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten">
							Patient Address: 7700 San Felipe, Houston, TX, 77029
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten" style = "text-align: center;">
							<h4>Perscription: glucophage 15mg</h4>
							<h4>1 dose qid, 1 week</h4>
							<h4>Urgency: Low</h4>
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-3">
						<p>Number of Pills:</p>
					</div>
					<div class = "col-md-3">
						<input type = "number" name = "patientFourPillCount" id = "patientFourPillCount" class = "form-control" placeholder="Insert Number of Pills Here" value = "0">
					</div>
					<div class = "col-md-3">
						Doctor: Nile Dixon
					</div>
					<div class = "col-md-3">
						<img class = "img-responsive" src="img/submitimg.png" onclick="deToggle(['patientEightTab'])">
					</div>
				</div>
			</div>
		</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="patientFive">
    	<div class = "container">
	    	<div class = "well">
				<h3 style = "text-align: center;">Dr. Jasmine Cantu and Associates</h3>
				<p style = "text-align: center;">518 Shepherd Drive | Houston, Texas, 77007</p>
				<p style = "text-align: center;">Phone Number: (281)-305-0989 | Fax Number: (281)-305-0982</p>
				<div class = "row">
					<div class = "col-md-6">
						<div class = "well whiten">Patient Name: Mattie Burke</div>
					</div>
					<div class = "col-md-6">
						<div class = "well whiten">Date Prescribed: 06/07/17</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten">
							Patient Address: 17711 Treborway, Houston, TX, 77014
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten" style = "text-align: center;">
							<h4>Perscription: simvastatin 10mg</h4>
							<h4>1 dose q4h, 5 days</h4>
							<h4>Urgency: Low</h4>
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-3">
						<p>Number of Pills:</p>
					</div>
					<div class = "col-md-3">
						<input type = "number" name = "patientFivePillCount" id = "patientFivePillCount" class = "form-control" placeholder="Insert Number of Pills Here" value = "0">
					</div>
					<div class = "col-md-3">
						Doctor: Stefany Garcia
					</div>
					<div class = "col-md-3">
						<img class = "img-responsive" src="img/submitimg.png" onclick="deToggle(['patientThreeTab','patientSevenTab'])">
					</div>
				</div>
			</div>
		</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="patientSix">
    	<div class = "container">
	    	<div class = "well">
				<h3 style = "text-align: center;">Dr. Jasmine Cantu and Associates</h3>
				<p style = "text-align: center;">518 Shepherd Drive | Houston, Texas, 77007</p>
				<p style = "text-align: center;">Phone Number: (281)-305-0989 | Fax Number: (281)-305-0982</p>
				<div class = "row">
					<div class = "col-md-6">
						<div class = "well whiten">Patient Name: Shelia Doyle</div>
					</div>
					<div class = "col-md-6">
						<div class = "well whiten">Date Prescribed: 05/24/17</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten">
							Patient Address: 7380 Ella Blvd, Spring, TX, 77388
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten" style = "text-align: center;">
							<h4>Perscription: zestril 10mg</h4>
							<h4>1 dose PO q12h for 5 days</h4>
							<h4>Urgency: High</h4>
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-3">
						<p>Number of Pills:</p>
					</div>
					<div class = "col-md-3">
						<input type = "number" name = "patientSixPillCount" id = "patientSixPillCount" class = "form-control" placeholder="Insert Number of Pills Here" value = "0">
					</div>
					<div class = "col-md-3">
						Doctor: Nile Dixon
					</div>
					<div class = "col-md-3">
						<img class = "img-responsive" src="img/submitimg.png" onclick="deToggle(['patientFourTab'])">
					</div>
				</div>
			</div>
		</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="patientSeven">
    	<div class = "container">
	    	<div class = "well">
				<h3 style = "text-align: center;">Dr. Jasmine Cantu and Associates</h3>
				<p style = "text-align: center;">518 Shepherd Drive | Houston, Texas, 77007</p>
				<p style = "text-align: center;">Phone Number: (281)-305-0989 | Fax Number: (281)-305-0982</p>
				<div class = "row">
					<div class = "col-md-6">
						<div class = "well whiten">Patient Name: Bernadette Gray</div>
					</div>
					<div class = "col-md-6">
						<div class = "well whiten">Date Prescribed: 5/31/17</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten">
							Patient Address: 5401 Richmond Ave Apt #412, Houston, TX, 77005
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten" style = "text-align: center;">
							<h4>Perscription: hydrocodone 20mg</h4>
							<h4>take 1 dose every 12 hours for 5 days</h4>
							<h4>Urgency: Medium</h4>
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-3">
						<p>Number of Pills:</p>
					</div>
					<div class = "col-md-3">
						<input type = "number" name = "patientSevenPillCount" id = "patientSevenPillCount" class = "form-control" placeholder="Insert Number of Pills Here" value = "0">
					</div>
					<div class = "col-md-3">
						Doctor: Carlos Mendiola
					</div>
					<div class = "col-md-3">
						<img class = "img-responsive" src="img/submitimg.png" onclick="deToggle(['patientTwoTab','patientSixTab'])">
					</div>
				</div>
			</div>
		</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="patientEight">
    	<div class = "container">
	    	<div class = "well">
				<h3 style = "text-align: center;">Dr. Jasmine Cantu and Associates</h3>
				<p style = "text-align: center;">518 Shepherd Drive | Houston, Texas, 77007</p>
				<p style = "text-align: center;">Phone Number: (281)-305-0989 | Fax Number: (281)-305-0982</p>
				<div class = "row">
					<div class = "col-md-6">
						<div class = "well whiten">Patient Name: Terrance George</div>
					</div>
					<div class = "col-md-6">
						<div class = "well whiten">Date Prescribed: 06/13/17</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten">
							Patient Address: 2185 Parker St, Houston, TX, 77021
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<div class = "well whiten" style = "text-align: center;">
							<h4>Perscription: hydrocodone 10mg</h4>
							<h4>Take 1 dose every 24 hours for 2 wks</h4>
							<h4>Urgency: Low</h4>
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-3">
						<p>Number of Pills:</p>
					</div>
					<div class = "col-md-3">
						<input type = "number" name = "patientEightPillCount" id = "patientEightPillCount" class = "form-control" placeholder="Insert Number of Pills Here" value = "0">
					</div>
					<div class = "col-md-3">
						Doctor: Nile Dixon
					</div>
					<div class = "col-md-3">
						<button><img class = "img-responsive" src="img/submitimg.png"></button>
					</div>
				</div>
			</div>
		</div>
    </div>
  </div>

</div>
</form>
<style type="text/css">
	.whiten {
		background: #ffffff;
	}
	.disabledTab {
    	pointer-events: none;
    	
	}
	.disabledTab > a {
		color: white;
	}

	.answered > a {
		background-color: #00ff00;
	}
</style>
<script type="text/javascript">
	function deToggle (ids) {
		for (var i = 0; i < ids.length; i++) {
			if (document.getElementById(ids[i]).classList.contains('disabledTab')) {
				document.getElementById(ids[i]).classList.remove('disabledTab');
				
			}
		}
		updateProgressBar();
	}
	
	function updateProgressBar() {
		var value = 0;
		var ids = ['patientOnePillCount','patientTwoPillCount','patientThreePillCount','patientFourPillCount','patientFivePillCount','patientSixPillCount','patientSevenPillCount','patientEightPillCount'];
		for (var i = 0; i < ids.length; i++) {
			if (document.getElementById(ids[i]).value != 0) {
				var value =  value + 1;
			}
		}
		document.getElementById('progress').innerHTML = 'Progress: ' + value + '/8 Patients Filled';
	}

	document.getElementById('patientOnePillCount').addEventListener('change', function() {
		if (document.getElementById('patientOnePillCount').value > 0) {
			document.getElementById('patientOneTab').innerHTML = '<a href="#patientOne" aria-controls="patientOne" role="tab" data-toggle="tab" style = "text-color: #00ff00;">Alexander Luna</a></li>'
		} if (document.getElementById('patientOnePillCount').value <= 0) {
			document.getElementById('patientOneTab').innerHTML = '<a href="#patientOne" aria-controls="patientOne" role="tab" data-toggle="tab" style = "background-color: #ff0000;">Alexander Luna</a></li>'
		}

	});
	document.getElementById('patientTwoPillCount').addEventListener('change', function() {
		if (document.getElementById('patientTwoPillCount').value > 0) {
			document.getElementById('patientTwoTab').innerHTML = '<a href="#patientTwo" aria-controls="patientTwo" role="tab" data-toggle="tab" style = "text-color: #00ff00;">Matt Floyd</a></li>'
		} if (document.getElementById('patientOnePillCount').value <= 0) {
			document.getElementById('patientOneTab').innerHTML = '<a href="#patientOne" aria-controls="patientOne" role="tab" data-toggle="tab" style = "background-color: #ff0000;">Matt Floyd</a></li>'
		}

	});
</script>