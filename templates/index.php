<div class = "row" style = "padding-top: 50px;">
	<div class = "col-md-7" style="padding-left: 0px; padding-right: 0px;">
		<img class = "img-responsive" src = "img/img1.jpg" style = "height: 300px; width: 100%;" id = "imgOne">
	</div>
	<div class = "col-md-5" style="padding-left: 0px; padding-right: 0px;">
		<img class = "img-responsive" src = "img/careers/mbc.jpeg" style = "height: 300px; width: 100%;" id = "imgTwo">
	</div>
</div>
<div class = "row">
	<div class = "col-md-3" style="padding-left: 0px; padding-right: 0px;">
		<img class = "img-responsive" src = "img/careers/mlt.jpg" style = "height: 300px; width: 100%;" id = "imgThree">
	</div>
	<div class = "col-md-6" style="padding-left: 0px; padding-right: 0px;">
		<img class = "img-responsive" src = "img/bylogo.jpg" style = "height: 300px; width: 100%;" id = "imgFour">
	</div>
	<div class = "col-md-3" style="padding-left: 0px; padding-right: 0px;">
		<img class = "img-responsive" src = "img/careers/pt.jpeg" style = "height: 300px; width: 100%;" id = "imgFive">
	</div>
</div>
<div class = "row">
	<div class = "col-md-4" style="padding-left: 0px; padding-right: 0px;">
		<img class = "img-responsive" src = "img/slideshow/11.JPG" style = "height: 300px; width: 100%;" id = "imgSix">
	</div>
	<div class = "col-md-4" style="padding-left: 0px; padding-right: 0px;">
		<img class = "img-responsive" src = "img/slideshow/10.jpg" style = "height: 300px; width: 100%;" id = "imgSeven">
	</div>
	<div class = "col-md-4" style="padding-left: 0px; padding-right: 0px;">
		<img class = "img-responsive" src = "img/slideshow/1.jpg" style = "height: 300px; width: 100%;" id = "imgEight">
	</div>
</div>

<script type="text/javascript">
	function randomImage(id) {
		var images = ['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg','11.jpg','12.jpg','13.jpg','14.jpg','15.jpg','16.jpg','17.jpg','18.jpg','19.jpg','20.jpg','21.jpg','22.jpg','23.jpg','24.jpg','25.jpg','26.jpg'];
		document.getElementById(id).src = 'img/slideshow/' + images[Math.floor(Math.random()*images.length)];
		setTimeout(randomImage, Math.random()*10000, id);
	}
	setTimeout(randomImage, 5000, 'imgOne');
	setTimeout(randomImage, 2500, 'imgTwo');
	setTimeout(randomImage, 6000, 'imgThree');
	setTimeout(randomImage, 7000, 'imgFive');
	setTimeout(randomImage, 1000, 'imgSix');
	setTimeout(randomImage, 5500, 'imgSeven');
	setTimeout(randomImage, 4500, 'imgEight');

</script>