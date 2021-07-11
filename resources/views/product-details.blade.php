<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<style>
		*{
			margin: 0;
			padding: 0;
		}
		body{
			background-image: url(background.jpeg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		body div.main-body{
				width: 90%;
				float: left;
				/* background-color: red; */
                background: radial-gradient(#fff,#ffd6d6);
				margin: 5%;
			}
		body div.main-body div.right{
				width: 100%;
				float: left;
				/* background-color: green; */
				margin:10px;

			}
		body div.main-body div.right div.right1{
				width: 45%;
				float: left;
				background-color: pink;
				margin: 15px; */
				/* padding: 5px;
				/* margin-bottom: 5px; */
			}
		body div.main-body div.right div.right2{
				width: 45%;
				background-color: yellow;
				float: left;
				margin: 15px;
				padding: 5px;

			}
		body div.main-body div.right div.images{
				margin:5px;
				/* background-color: red; */
			}
            img {
  vertical-align: middle;
}


/* Hide the images by default */
.mySlides {
  display: none;
  border: 1px solid pink;
  padding: 25px;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 1);
  height: 75vh;

 /* margin-left: 350px;
  margin-right: 350px;*/
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev {
  cursor: pointer;
  position: absolute;
  top: 75%;
  width: auto;
  padding: 26px;
  /*margin-top: -50px;*/
  color: black;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  cursor: pointer;
  position: absolute;
  top: 75%;
  width: auto;
  padding: 26px;
  /*margin-top: -50px;*/
  color: red;
  margin-left: 28.6%;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}


/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 14px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  /* padding: 12px 16px; */
  color: white;
  border: 1px solid yellow;
  height: 30px;
}

.row1:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column1 {
  float: left;
  width: 25%;
  height: 15vh;
  padding: 0px;
  border: 1px solid red;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
  padding: 10px;
}

.active,
.demo:hover {
  opacity: 1;
}
	</style>
</head>
<body>
	<div class="main-body">
		<div class="right">
			<div class="right1">
            <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="assets/img/header.jpg" style="width:100%; height: 70vh;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="assets/img/hero-bg.jpg" style="width:100%; height: 70vh;">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="assets/img/header.jpg" style="width:100%; height: 70vh;">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="assets/img/books.jpg" style="width:100%; height: 70vh;">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row1">
    <div class="column1">
      <img class="demo cursor" src="assets/img/header.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column1">
      <img class="demo cursor" src="assets/img/hero-bg.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column1">
      <img class="demo cursor" src="assets/img/header.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column1">
      <img class="demo cursor" src="assets/img/books.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
  </div>
			</div><!--end of right1-->
			<div class="right2">
			<p>Home / T-shirt</p>
			<h1>Red Printed T-shirt by HRX</h1>
			<h4>Nu.50.00</h4>
			<select>
				<option>Select Size</option>
				<option>XXL</option>
				<option>XL</option>
				<option>Large</option>
				<option>Medium</option>
				<option>Small</option>
			</select>
			<input type="number" value="1">
			<a href="" class="btn">Buy</a>

			<h3>Product Details<i class="fa fa-indent"></i></h3><br>
			<p>Give Your Summer wardrobe a style upgrade with the HRX Men's Active T-shirt. Team it with a pair of shorts for your morning or a denims for an evening out with the guys.</p>
		</div>
		</div><!--end of main-right-->
	</div><!--end of main-body-->

    <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</html>