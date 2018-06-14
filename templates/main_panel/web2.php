<div class = "container" style = "padding-top: 50px;" id = "textinput">
	
</div>

<div class = "container" id = "textbox" style = "position: absolute; top: 550px; display: block;">
	<div class = "well">
		<div class = "panel panel-default">

			<div class = "panel-body" style="display: block;" id = "start">
				<button class = "btn btn-primary" id = "gotoq1">Start Task</button>
			</div>
			<div class = "panel-body" style="display: none;" id = "q1">
				<h2>The First Task: Insert a heading</h2>
				<p>How to insert a heading:</p>
				<ol>
					<li>Start the line with <?php echo htmlspecialchars('<h1>');?></li>
					<li>Type whatever text you want.</li>
					<li>End the line with <?php echo htmlspecialchars('</h1>');?></li>
				</ol>
				<button class = "btn btn-primary" id = "gotoq2">Go To Next Question</button>
			</div>
			<div class = "panel-body" style="display: none;" id = "q2">
				<h2>The Second Task: Insert three paragraphs</h2>
				<p>How to insert a heading:</p>
				<ol>
					<li>Start the line with <?php echo htmlspecialchars('<p>');?></li>
					<li>Type whatever text you want.</li>
					<li>End the line with <?php echo htmlspecialchars('</p>');?></li>
				</ol>
				<div class = "row">
					<div class = "col-md-6" style = "text-align: center;">
						<button class = "btn btn-primary" id = "gobacktoq1">Go To Previous Question</button>
					</div>
					<div class = "col-md-6" style = "text-align: center;">
						<button class = "btn btn-primary" id = "gotoq3">Go To Next Question</button>
					</div>
				</div>
			</div>
			<div class = "panel-body" style="display: none;" id = "q3">
				<h2>The Third Task: Add a link to "https://www.google.com"</h2>
				<p>How to insert a link:</p>
				<ol>
					<li>Start the line with <?php echo htmlspecialchars('<a href = "#" target = "_blank">');?></li>
					<li>Replace the # in "href=" with the link.</li>
					<li>Type whatever text you want.</li>
					<li>End the line with <?php echo htmlspecialchars('</a>');?></li>
				</ol>
				<div class = "row">
					<div class = "col-md-6" style = "text-align: center;">
						<button class = "btn btn-primary" id = "gobacktoq2">Go To Previous Question</button>
					</div>
					<div class = "col-md-6" style = "text-align: center;">
						<button class = "btn btn-primary" id = "gotoq4">Go To Next Question</button>
					</div>
				</div>
			</div>
			<div class = "panel-body" style="display: none;" id = "q4">
				<h2>The Fourth Task: Insert this image : 'img/dogimage.jpeg'</h2>
				<p>How to insert an image:</p>
				<ol>
					<li>Start the line with <?php echo htmlspecialchars('<img src = "#">');?></li>
					<li>Replace the # in "src =" with the link to the image.</li>
				</ol>
				<div class = "row">
					<div class = "col-md-6" style = "text-align: center;">
						<button class = "btn btn-primary" id = "gobacktoq3">Go To Previous Question</button>
					</div>
					<div class = "col-md-6" style = "text-align: center;">
						<button class = "btn btn-primary" id = "gotoq5">Go To Next Question</button>
					</div>
				</div>
			</div>
			<div class = "panel-body" style="display: none;" id = "q5">
				<h2>The Fifth Task: Change the color of your heading.</h2>
				<p>How to change the color of your heading:</p>
				<ol>
					<li>
					<li>Find the <?php echo htmlspecialchars('<h1>');?> tag.</li>
					<li>Replace <?php echo htmlspecialchars('<h1>');?> with <?php echo htmlspecialchars('<h1 style = "color:#;">');?></li>
					<li>Replace the # in <?php echo htmlspecialchars('<h1 style = "color:#;">');?> with the color you want.</li>
					<li>Some Color Options: Blue, Brown, Gold, Gray, Green, Pink, Violet, Red</li>
				</ol>
				<div class = "row">
					<div class = "col-md-6" style = "text-align: center;">
						<button class = "btn btn-primary" id = "gobacktoq4">Go To Previous Question</button>
					</div>
					<div class = "col-md-6" style = "text-align: center;">
						<button class = "btn btn-primary" id = "gotoq6">Go To Next Question</button>
					</div>
				</div>
			</div>
			<div class = "panel-body" style="display: none;" id = "q6">
				<h2>The Sixth Task: Align a paragraph in the center.</h2>
				<p>How to align a paragraph in the center:</p>
				<ol>
					<li>Find the <?php echo htmlspecialchars('<p>');?> tag.</li>
					<li>Replace <?php echo htmlspecialchars('<p>');?> with <?php echo htmlspecialchars('<p style = "text-align:#;">');?></li>
					<li>Replace the # in <?php echo htmlspecialchars('<p style = "text-align:#;">');?> with the "center".</li>
					<li>You can also use "left" to adjust the text to the left, "right" to adjust the text to the right, and "justify" to justify the text.</li>
				</ol>
				<div class = "row">
					<div class = "col-md-6" style = "text-align: center;">
						<button class = "btn btn-primary" id = "gobacktoq5">Go To Previous Question</button>
					</div>
					<div class = "col-md-6" style = "text-align: center;">
						<button class = "btn btn-primary" id = "gotoq7">Go To Next Question</button>
					</div>
				</div>
				
			</div>
			<div class = "panel-body" style="display: none;" id = "q7">
				<h2>The Seventh Task: Insert a button that says submit</h2>
				<p>How to insert a button:</p>
				<ol>
					<li>Start the line with <?php echo htmlspecialchars('<button>');?></li>
					<li>Type in the desired text.</li>
					<li>End the line with <?php echo htmlspecialchars('</button>');?></li>
				</ol>
				<div class = "row">
					<div class = "col-md-6" style = "text-align: center;">
						<button class = "btn btn-primary" id = "gobacktoq6">Go To Previous Question</button>
					</div>
					<div class = "col-md-6" style = "text-align: center;">
						<button class = "btn btn-primary" id = "gotoq8">Go To Next Question</button>
					</div>
				</div>
			</div>
			<div class = "panel-body" style="display: none;" id = "q8">
				<h2>The Eighth Task: Add a table with 3 rows and five columns</h2>
				<p>How to insert a table:</p>
				<ol>
					<li>Start the line with <?php echo htmlspecialchars('<table></table>');?></li>
					<li>Inside <?php echo htmlspecialchars('<table></table>');?>, type <?php echo htmlspecialchars('<tr></tr>');?> to insert a row into the table.</li>
					<li>Inside <?php echo htmlspecialchars('<tr></tr>');?>, type <?php echo htmlspecialchars('<td></td>');?> to insert a column into that row.</li>
					<li>Inside <?php echo htmlspecialchars('<td></td>');?>, type whatever you want.</li>
				</ol>
				<div class = "row">
					<div class = "col-md-6" style = "text-align: center;">
						<button class = "btn btn-primary" id = "gobacktoq7">Go To Previous Question</button>
					</div>
					<div class = "col-md-6" style = "text-align: center;">
						<a class = "btn btn-primary" href = "?m=/results/Web_Developer">Finish</a>
					</div>
				</div>
			</div>
		</div>
		<br>
		<textarea class = "form-control" id = "textform" style = "height: 100px;"></textarea>
		<br>
		<div class = "row">
			<div class = "col-md-6" style = "text-align: center;">
				<button class = "btn btn-primary" id = "updateCode">Update Code</button>
			</div>
			<div class = "col-md-6" style = "text-align: center;">
				<button class = "btn btn-primary" id = "deleteCode">Refresh Code</button>
			</div>
		</div>
	</div>
</div>



<script type="text/javascript">
	document.addEventListener('keydown', function(e){
		if (e.keyCode == 90 && e.ctrlKey) {
			var textbox = document.getElementById('textbox');
			if (textbox.style.display == 'none') {
				textbox.style.display = 'block';
			} else {
				textbox.style.display = 'none';
			}
		}
	});

	document.getElementById('updateCode').addEventListener('click', function(){
		document.getElementById('textinput').innerHTML = document.getElementById('textform').value;
	});

	document.getElementById('gotoq1').addEventListener('click', function(){
		document.getElementById('start').style.display = 'none';
		document.getElementById('q1').style.display = 'block';
	});
	document.getElementById('gotoq2').addEventListener('click', function(){
		document.getElementById('q1').style.display = 'none';
		document.getElementById('q2').style.display = 'block';
	});
	document.getElementById('gotoq3').addEventListener('click', function(){
		document.getElementById('q2').style.display = 'none';
		document.getElementById('q3').style.display = 'block';
	});
	document.getElementById('gotoq4').addEventListener('click', function(){
		document.getElementById('q3').style.display = 'none';
		document.getElementById('q4').style.display = 'block';
	});
	document.getElementById('gotoq5').addEventListener('click', function(){
		document.getElementById('q4').style.display = 'none';
		document.getElementById('q5').style.display = 'block';
	});
	document.getElementById('gotoq6').addEventListener('click', function(){
		document.getElementById('q5').style.display = 'none';
		document.getElementById('q6').style.display = 'block';
	});
	document.getElementById('gotoq7').addEventListener('click', function(){
		document.getElementById('q6').style.display = 'none';
		document.getElementById('q7').style.display = 'block';
	});
	document.getElementById('gotoq8').addEventListener('click', function(){
		document.getElementById('q7').style.display = 'none';
		document.getElementById('q8').style.display = 'block';
	});

	document.getElementById('gobacktoq1').addEventListener('click', function(){
		document.getElementById('q2').style.display = 'none';
		document.getElementById('q1').style.display = 'block';
	});
	document.getElementById('gobacktoq2').addEventListener('click', function(){
		document.getElementById('q3').style.display = 'none';
		document.getElementById('q2').style.display = 'block';
	});
	document.getElementById('gobacktoq3').addEventListener('click', function(){
		document.getElementById('q4').style.display = 'none';
		document.getElementById('q3').style.display = 'block';
	});
	document.getElementById('gobacktoq4').addEventListener('click', function(){
		document.getElementById('q5').style.display = 'none';
		document.getElementById('q4').style.display = 'block';
	});
	document.getElementById('gobacktoq5').addEventListener('click', function(){
		document.getElementById('q6').style.display = 'none';
		document.getElementById('q5').style.display = 'block';
	});
	document.getElementById('gobacktoq6').addEventListener('click', function(){
		document.getElementById('q7').style.display = 'none';
		document.getElementById('q6').style.display = 'block';
	});
	document.getElementById('gobacktoq7').addEventListener('click', function(){
		document.getElementById('q8').style.display = 'none';
		document.getElementById('q7').style.display = 'block';
	});
</script>