<div class = "container" style = "padding-top: 40px;">
	<div class = "row">
		<!-- <div class = "col-md-12"> -->
		<div class = "col-sm-4">
			<div class = "panel panel-default" id = "questionPortal">
				<div class = "panel-heading">
					<h2 style = "text-align: center;">Question</h2>
				</div>
				<div class = "panel-body">
					<span id = "questionLoc">
						<div class = "panel panel-default">
							<div class = "panel-body" id = "q1resp" style = "display: none;">
								<h4>Problem: The passwords do not appear in a dot format. Replace the line <?php  echo htmlspecialchars('<input type = "text" id = "password1" class = "form-control">');?> with </h4>
								<p>Option One: <?php echo htmlspecialchars('<input type = "number" id = "password1" class = "form-control">');?></p>
								<p>Option Two: <?php echo htmlspecialchars('<input type = "date" id = "password1" class = "form-control">');?></p>
								<p>Option Three: <?php echo htmlspecialchars('<input type = "password" id = "password1" class = "form-control">');?></p>
							</div>
							<div class = "panel-body" id = "q2resp" style = "display: none;">
								<h4>Problem: The favorite number input does not only take numbers. Replace the line <?php  echo htmlspecialchars('<input type = "text" id = "favenumber" class = "form-control">');?> with </h4>
								<p>Option One: <?php echo htmlspecialchars('<input type = "date" id = "favenumber" class = "form-control">');?></p>
								<p>Option Two: <?php echo htmlspecialchars('<input type = "number" id = "favenumber" class = "form-control">');?></p>
								<p>Option Three: <?php echo htmlspecialchars('<input type = "password" id = "favenumber" class = "form-control">');?></p>
							</div>
							<div class = "panel-body" id = "q3resp" style = "display: none;">
								<h4>Problem: The favorite color input does not only take colors. Replace the line <?php  echo htmlspecialchars('<input type = "text" id = "favecolor" class = "form-control">');?> with </h4>
								<p>Option One: <?php echo htmlspecialchars('<input type = "color" id = "favecolor" class = "form-control">');?></p>
								<p>Option Two: <?php echo htmlspecialchars('<input type = "number" id = "favecolor" class = "form-control">');?></p>
								<p>Option Three: <?php echo htmlspecialchars('<input type = "date" id = "favecolor" class = "form-control">');?></p>
							</div>
							<div class = "panel-body" id = "q4resp" style = "display: none;">
								<h4>Problem: The birthday input does not only take dates. Replace the line <?php  echo htmlspecialchars('<input type = "text" id = "date" class = "form-control">');?> with </h4>
								<p>Option One: <?php echo htmlspecialchars('<input type = "month" id = "date" class = "form-control">');?></p>
								<p>Option Two: <?php echo htmlspecialchars('<input type = "range" id = "date" class = "form-control">');?></p>
								<p>Option Three: <?php echo htmlspecialchars('<input type = "date" id = "date" class = "form-control">');?></p>
							</div>
							<div class = "panel-body" id = "q5resp" style = "display: none;">
								<h4>Problem: The input for the "Do you like this CTD?" question is not a checkbox. Replace the line <?php  echo htmlspecialchars('<input type = "text" id = "question" class = "form-control">');?> with </h4>
								<p>Option One: <?php echo htmlspecialchars('<input type = "radio" id = "question" class = "form-control">');?></p>
								<p>Option Two: <?php echo htmlspecialchars('<input type = "checkbox" id = "question" class = "form-control">');?></p>
								<p>Option Three: <?php echo htmlspecialchars('<input type = "button" id = "question" class = "form-control">');?></p>
							</div>
							<div class = "panel-body" id = "q6resp" style = "display: none;">
								<h4>Problem: The input for the "Rate this CTD on a scale of one to ten." question is not a sliding number scale. Replace the line <?php  echo htmlspecialchars('<input type = "text" id = "rating" class = "form-control">');?> with </h4>
								<p>Option One: <?php echo htmlspecialchars('<input type = "number" id = "rating" class = "form-control">');?></p>
								<p>Option Two: <?php echo htmlspecialchars('<input type = "week" id = "rating" class = "form-control">');?></p>
								<p>Option Three: <?php echo htmlspecialchars('<input type = "range" id = "rating" class = "form-control">');?></p>
							</div>
							<div class = "panel-body" id = "q7resp" style = "display: none;">
								<h4>Problem: The input for the "What time is it?" question is not a time input. Replace the line <?php  echo htmlspecialchars('<input type = "text" id = "time" class = "form-control">');?> with </h4>
								<p>Option One: <?php echo htmlspecialchars('<input type = "time" id = "time" class = "form-control">');?></p>
								<p>Option Two: <?php echo htmlspecialchars('<input type = "tel" id = "time" class = "form-control">');?></p>
								<p>Option Three: <?php echo htmlspecialchars('<input type = "week" id = "time" class = "form-control">');?></p>
							</div>
							<div class = "panel-body" id = "q8resp" style = "display: none;">
								<h4>Problem: The word "password" is not the color RED. Replace the line <?php  echo htmlspecialchars('<h2>Password</h2>');?> with </h4>
								<p>Option One: <?php echo htmlspecialchars('<h2 style = "color: #0000ff;">Password</h2>');?></p>
								<p>Option Two: <?php echo htmlspecialchars('<h2 style = "color: #00ff00;">Password</h2>');?></p>
								<p>Option Three: <?php echo htmlspecialchars('<h2 style = "color: #ff0000;">Password</h2>');?></p>
							</div>
						</div>
					</span>
					<span id = "response" style = "text-align: center;">
						<button class = "btn btn-default" id = "startTask">Start Task</button>
					</span>
					<span>

						<button class = "btn btn-default" id = "q1respbutton" style = "display: none;">Next Question</button>
						<button class = "btn btn-default" id = "q2respbutton" style = "display: none;">Next Question</button>
						<button class = "btn btn-default" id = "q3respbutton" style = "display: none;">Next Question</button>
						<button class = "btn btn-default" id = "q4respbutton" style = "display: none;">Next Question</button>
						<button class = "btn btn-default" id = "q5respbutton" style = "display: none;">Next Question</button>
						<button class = "btn btn-default" id = "q6respbutton" style = "display: none;">Next Question</button>
						<button class = "btn btn-default" id = "q7respbutton" style = "display: none;">Next Question</button>
						<form action = "?m=/results/Web_Developer" method = "POST" style = "display: none;" id = "triggerlast">
							<input type = "hidden" name = "sim" value = "web">
							<button class = "btn btn-default">Finish</button>
						</form>
					</span>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class = "row">
		<div class = "col-md-6" id = "textform">
			<div class = "panel panel-default">
				<div class = "panel-body">
					<div class = "row">
						<div class = "col-md-6">
							<h2>Password</h2>
						</div>
						<div class = "col-md-6">
							<input type = "text" id = "password1" class = "form-control">
						</div>
					</div>
					<div class = "row">
						<div class = "col-md-6">
							<h2>Favorite Number</h2>
						</div>
						<div class = "col-md-6">
							<input type = "text" id = "favenumber" class = "form-control">
						</div>
					</div>
					<div class = "row">
						<div class = "col-md-6">
							<h2>Favorite Color</h2>
						</div>
						<div class = "col-md-6">
							<input type = "text" id = "favecolor" class = "form-control">
						</div>
					</div>
					<div class = "row">
						<div class = "col-md-6">
							<h2>Birthday</h2>
						</div>
						<div class = "col-md-6">
							<input type = "text" id = "date" class = "form-control">
						</div>
					</div>
					<div class = "row">
						<div class = "col-md-6">
							<h2>Do you like this CTD?</h2>
						</div>
						<div class = "col-md-6">
							<input type = "text" id = "question" class = "form-control">
						</div>
					</div>
					<div class = "row">
						<div class = "col-md-6">
							<h2>Rate this CTD on a scale of one to ten.</h2>
						</div>
						<div class = "col-md-6">
							<input type = "text" id = "rating" class = "form-control">
						</div>
					</div>
					<div class = "row">
						<div class = "col-md-6">
							<h2>What time is it?</h2>
						</div>
						<div class = "col-md-6">
							<input type = "text" id = "time" class = "form-control">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class = "col-md-6">
			<textarea class = "form-control" id = "formCode" style = "height: 400px;">
				<div class = "panel panel-default">
					<div class = "panel-body">
						<div class = "row">
							<div class = "col-md-6">
								<h2>Password</h2>
							</div>
							<div class = "col-md-6">
								<input type = "text" id = "password1" class = "form-control">
							</div>
						</div>
						<div class = "row">
							<div class = "col-md-6">
								<h2>Favorite Number</h2>
							</div>
							<div class = "col-md-6">
								<input type = "text" id = "favenumber" class = "form-control">
							</div>
						</div>
						<div class = "row">
							<div class = "col-md-6">
								<h2>Favorite Color</h2>
							</div>
							<div class = "col-md-6">
								<input type = "text" id = "favecolor" class = "form-control">
							</div>
						</div>
						<div class = "row">
							<div class = "col-md-6">
								<h2>Birthday</h2>
							</div>
							<div class = "col-md-6">
								<input type = "text" id = "date" class = "form-control">
							</div>
						</div>
						<div class = "row">
							<div class = "col-md-6">
								<h2>Do you like this CTD?</h2>
							</div>
							<div class = "col-md-6">
								<input type = "text" id = "question" class = "form-control">
							</div>
						</div>
						<div class = "row">
							<div class = "col-md-6">
								<h2>Rate this CTD on a scale of one to ten.</h2>
							</div>
							<div class = "col-md-6">
								<input type = "text" id = "rating" class = "form-control">
							</div>
						</div>
						<div class = "row">
							<div class = "col-md-6">
								<h2>What time is it?</h2>
							</div>
							<div class = "col-md-6">
								<input type = "text" id = "time" class = "form-control">
							</div>
						</div>
					</div>
				</div>
			</textarea>
			<div id="editor">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
	&lt;script&gt;
	    function sayHello() {
	        console.log('hello')
	    }
	&lt;/script&gt;
    &lt;body&gt;
		&lt;button onclick="sayHello()"&gt;Say Hello&lt;/button&gt;
		&lt;div class = "panel panel-default"&gt;
		  &lt;div class = "panel-body"&gt;
		    &lt;div class = "row"&gt;
		      &lt;div class = "col-md-6"&gt;
		        &lt;h2&gt;Password&lt;/h2&gt;
		      &lt;/div&gt;
		      &lt;div class = "col-md-6"&gt;
		        &lt;input type = "text" id = "password1" class = "form-control"&gt;
		      &lt;/div&gt;
		    &lt;/div&gt;
		    &lt;div class = "row"&gt;
		      &lt;div class = "col-md-6"&gt;
		        &lt;h2&gt;Favorite Number&lt;/h2&gt;
		      &lt;/div&gt;
		      &lt;div class = "col-md-6"&gt;
		        &lt;input type = "text" id = "favenumber" class = "form-control"&gt;
		      &lt;/div&gt;
		    &lt;/div&gt;
		    &lt;div class = "row"&gt;
		      &lt;div class = "col-md-6"&gt;
		        &lt;h2&gt;Favorite Color&lt;/h2&gt;
		      &lt;/div&gt;
		      &lt;div class = "col-md-6"&gt;
		        &lt;input type = "text" id = "favecolor" class = "form-control"&gt;
		      &lt;/div&gt;
		    &lt;/div&gt;
		    &lt;div class = "row"&gt;
		      &lt;div class = "col-md-6"&gt;
		        &lt;h2&gt;Birthday&lt;/h2&gt;
		      &lt;/div&gt;
		      &lt;div class = "col-md-6"&gt;
		        &lt;input type = "text" id = "date" class = "form-control"&gt;
		      &lt;/div&gt;
		    &lt;/div&gt;
		    &lt;div class = "row"&gt;
		      &lt;div class = "col-md-6"&gt;
		        &lt;h2&gt;Do you like this CTD?&lt;/h2&gt;
		      &lt;/div&gt;
		      &lt;div class = "col-md-6"&gt;
		        &lt;input type = "text" id = "question" class = "form-control"&gt;
		      &lt;/div&gt;
		    &lt;/div&gt;
		    &lt;div class = "row"&gt;
		      &lt;div class = "col-md-6"&gt;
		        &lt;h2&gt;Rate this CTD on a scale of one to ten.&lt;/h2&gt;
		      &lt;/div&gt;
		      &lt;div class = "col-md-6"&gt;
		        &lt;input type = "text" id = "rating" class = "form-control"&gt;
		      &lt;/div&gt;
		    &lt;/div&gt;
		    &lt;div class = "row"&gt;
		      &lt;div class = "col-md-6"&gt;
		        &lt;h2&gt;What time is it?&lt;/h2&gt;
		      &lt;/div&gt;
		      &lt;div class = "col-md-6"&gt;
		        &lt;input type = "text" id = "time" class = "form-control"&gt;
		      &lt;/div&gt;
		    &lt;/div&gt;
		  &lt;/div&gt;
		&lt;/div&gt;
	&lt;/body&gt;
&lt;/html&gt;
				</div>
		</div>
		<div class = "row">
			<div class = "col-md-4">
				<button class = "btn btn-primary" id = "refreshCode">Update Code test5</button>
			</div>
			<div class = "col-md-4">
				<button class = "btn btn-primary" id = "resetCode">Reset Code test5</button>
			</div>
		</div>
	</div>

</div>

<script src="/ace-builds/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	var editor = ace.edit("editor");
	var code = editor.getValue();
	console.log(code)
	editor.setTheme("ace/theme/monokai");
	editor.session.setMode("ace/mode/html");
	// editor.session.setMode("ace/mode/javascript");
 	function User() {
 		this.code = '<div class = "panel panel-default">\
			<div class = "panel-body">\
				<div class = "row">\
					<div class = "col-md-6">\
						<h2>Password</h2>\
					</div>\
					<div class = "col-md-6">\
						<input type = "text" id = "password1" class = "form-control">\
					</div>\
				</div>\
				<div class = "row">\
					<div class = "col-md-6">\
						<h2>Favorite Number</h2>\
					</div>\
					<div class = "col-md-6">\
						<input type = "text" id = "favenumber" class = "form-control">\
					</div>\
				</div>\
				<div class = "row">\
					<div class = "col-md-6">\
						<h2>Favorite Color</h2>\
					</div>\
					<div class = "col-md-6">\
						<input type = "text" id = "favecolor" class = "form-control">\
					</div>\
				</div>\
				<div class = "row">\
					<div class = "col-md-6">\
						<h2>Birthday</h2>\
					</div>\
					<div class = "col-md-6">\
						<input type = "text" id = "date" class = "form-control">\
					</div>\
				</div>\
				<div class = "row">\
					<div class = "col-md-6">\
						<h2>Do you like this CTD?</h2>\
					</div>\
					<div class = "col-md-6">\
						<input type = "text" id = "question" class = "form-control">\
					</div>\
				</div>\
				<div class = "row">\
					<div class = "col-md-6">\
						<h2>Rate this CTD on a scale of one to ten.</h2>\
					</div>\
					<div class = "col-md-6">\
						<input type = "text" id = "rating" class = "form-control">\
					</div>\
				</div>\
				<div class = "row">\
					<div class = "col-md-6">\
						<h2>What time is it?</h2>\
					</div>\
					<div class = "col-md-6">\
						<input type = "text" id = "time" class = "form-control">\
					</div>\
				</div>\
			</div>\
		</div>';
	}

	var newUser = new User();

	User.prototype.update = function(){
		alert(document.getElementById('editor').value);
		this.code = document.getElementById('editor').value;
		alert(this.code);
	}

	User.prototype.resetCode = function(){
		alert(this.code);
		document.getElementById('editor').value = this.code;
		document.getElementById('textform').innerHTML = document.getElementById('editor').value;
	}

	document.getElementById('refreshCode').addEventListener('click',function(){
		const editor = ace.edit('editor');
		const code = editor.getValue();
		$('#textform').html(code);
		eval(code);
	});

	document.getElementById('resetCode').addEventListener('click', function(){
		document.getElementById('formCode').value = newUser.code;
		document.getElementById('textform').innerHTML = document.getElementById('formCode').value;
	});

	document.getElementById('startTask').addEventListener('click',function(){
		document.getElementById('q1respbutton').style.display = 'block';
		document.getElementById('q1resp').style.display = 'block';
		document.getElementById('startTask').style.display = 'none';
	});

	document.getElementById('q1respbutton').addEventListener('click',function(){
		document.getElementById('q2respbutton').style.display = 'block';
		document.getElementById('q2resp').style.display = 'block';
		document.getElementById('q1respbutton').style.display = 'none';
		document.getElementById('q1resp').style.display = 'none';
	});

	document.getElementById('q2respbutton').addEventListener('click',function(){
		document.getElementById('q3respbutton').style.display = 'block';
		document.getElementById('q3resp').style.display = 'block';
		document.getElementById('q2respbutton').style.display = 'none';
		document.getElementById('q2resp').style.display = 'none';
	});

	document.getElementById('q3respbutton').addEventListener('click',function(){
		document.getElementById('q4respbutton').style.display = 'block';
		document.getElementById('q4resp').style.display = 'block';
		document.getElementById('q3respbutton').style.display = 'none';
		document.getElementById('q3resp').style.display = 'none';
	});

	document.getElementById('q4respbutton').addEventListener('click',function(){
		document.getElementById('q5respbutton').style.display = 'block';
		document.getElementById('q5resp').style.display = 'block';
		document.getElementById('q4respbutton').style.display = 'none';
		document.getElementById('q4resp').style.display = 'none';
	});

	document.getElementById('q5respbutton').addEventListener('click',function(){
		document.getElementById('q6respbutton').style.display = 'block';
		document.getElementById('q6resp').style.display = 'block';
		document.getElementById('q5respbutton').style.display = 'none';
		document.getElementById('q5resp').style.display = 'none';
	});

	document.getElementById('q6respbutton').addEventListener('click',function(){
		document.getElementById('q7respbutton').style.display = 'block';
		document.getElementById('q7resp').style.display = 'block';
		document.getElementById('q6respbutton').style.display = 'none';
		document.getElementById('q6resp').style.display = 'none';
	});

	document.getElementById('q7respbutton').addEventListener('click',function(){
		document.getElementById('triggerlast').style.display = 'block';
		document.getElementById('q8resp').style.display = 'block';
		document.getElementById('q7respbutton').style.display = 'none';
		document.getElementById('q7resp').style.display = 'none';
	});
</script>
<style type="text/css" media="screen">
    #editor {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
</style>
