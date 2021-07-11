<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Second-hand Marketing</title>
	<link rel="stylesheet" type="text/css" href="css/styls.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Bree+Serif&family=Jomhuria&family=Squada+One&family=Ultra&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #f1f1f1;
  color: black;
}

.round {
  border-radius: 50%;
}
.form{
	padding: 30px 40px;
	/* border: 1px solid black; */
	width: 65%;
	margin-right: 75px;
	margin-left: 175px;
	justify-content: center;
	background: rgba(0, 0, 0, 0.1);
	border-radius: 10px;
	box-shadow: 5px 7px 10px rgba(0, 0, 0, 0.5);
	margin-top: 80px;
	margin-bottom: 20px;
}
.form-control{
	margin-bottom: 10px;
	padding-bottom: 20px;
	position: relative;
	
}
.form-control label{
	display: inline-block;
	margin-bottom: 5px;
}
.form-control input{
	border: 2px solid #f0f0f0;
	border-radius: 4px;
	font-family: inherit;
	font-size: 14px;
	width: 65%;
	height: 3vh;
	padding: 10px;
}	
.form-control small{
	visibility: hidden;
	position: absolute;
	background: 0;
	left: 0;
}
.form-control.error small{
	color: #e74c3c;
	visibility: visible;
}
.form button{
	background-color: #8e33ad;
	border: 2px solid #8e33ad;
	border-radius: 4px;
	color: #fff;
	display: block;
	font-family: inherit;
	font-size: 10px;
	padding: 10px;
	width: 15%;
}
textarea{
	width: 65%;
	height: 25vh;
	padding: 10px;
}
.myFile{
	height: 35vh;
	border: 1px solid black; 
	margin-bottom: 15px;
	padding: 10px;
}
.select{
	width: 45%;
	height: 6vh;
}
#btnAddMoreImages{
	height: 6vh;
	/* margin-top: 17px; */
}
.select option{
	font-size: 16px;
}
hr{
	margin-top: 20px;
	margin-bottom: 20px;
	border: 0.1px solid black;
	border-radius: 5px;
}
.ul li{
	list-style: none;
	display: inline-block;
	margin-top: 10px;
}
#button1{
	background: green;
  border: none;
  color: white;
  padding: 7px 7px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.navagation{
	position: fixed;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: row;
	flex-wrap: wrap;
	background: #d4d7de;
	box-shadow: 5px 7px 10px rgba(0, 0, 0, 0.5);
	width: 100%;
	height: 10vh;
	z-index: 1;
	margin-top: -80px;
}
.logoo{
	flex: 1 1 auto;
	float: left;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: bold;
	font-size: 18px;
}
a{
	margin: 15px;
	color: #000;
	text-decoration: none;
	text-transform: uppercase;
}
a:hover{
	color: #fff;
}
#Payment{
	/* border: 1px solid green; */
	width: 65%;
	height: 8vh;
	color: black;
}
.invalid-feedback {
	width: 100%;
	font-size: 80%;
	margin-left: 250px;
	color: #e3342f;
  }
</style>
</head>
<body>
<script type="text/javascript">
		function myfun() {
			var a = document.getElementById("mobilenumber").value;
			if (a==""){
				document.getElementById("messages").innerHTML="** Please fill Mobile Number";
			return false;
			}
			if (isNaN(a)){
				document.getElementById("messages").innerHTML="** enter only numeric value";
			return false;
			}
			if (a.length<8) {
				document.getElementById("messages").innerHTML="** Mobile Number must be 8 digit";
			return false;

			}
			if (a.length>8) {
				document.getElementById("messages").innerHTML="** Mobile Number must be 8 digit";
			return false;

			}
			if ((a.charAt(0)!=1) && (a.charAt(0)!=7)){
				document.getElementById("messages").innerHTML="** Mobile Number must start with 1 or 7 0r 77";
			return false;
			}
			if ((a.charAt(0)!=7) && (a.charAt(0)!=7)){
				document.getElementById("messages").innerHTML="** Mobile Number must start with 1 or 7 or 77";
			return false;
			}
			if ((a.charAt(1)!=7)){
				document.getElementById("messages").innerHTML="** Second number must be 7";
			return false;
			}
		}
	</script>

<!-- seller header  and logo-->
<div class="navagation">
    <a href="#" class="previous round">&#8249;</a>
    <a href="#" class="next round">&#8250;</a>

    <a href="#" class="logoo">One More Time</a>
    
</div>
<!-------------sellers side---------->
<div class="container">
<div class="small-container">
	<div class="row">
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
		<form action="{{url('save-buy') }}" class="form" method="POST" onsubmit="return myfun()">
		{{csrf_field() }}
			<h2>
					<span>For Buyer</span>
				</h2>
			<div class="ul">
			<ul>
				<li>
					<a>Buy, what you want</a>
					<span>/</span>
				</li>
				<li>
					<a>Commercial & Other stuffs</a>
				</li>
			</ul>
			</div>
			<hr>
			<h3 style="margin-bottom: 10px;">
				<span>DETAILS OF BUYER</span>
			</h3>

			<div class="form-control">
			<h5 style="margin-bottom: 10px;">
				<span>Brand for particular product</span>
			</h5>
				<input id="brand" value="{{$Computer->brand}}" type="text" readonly name="brand">
			</div>

			<div class="form-control">
				<h3>
					<span>First Name:</span>
				</h3>
				<input id="name" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus placeholder="Enter Your Frist Name">
				@error('firstname')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror			</div>
			<div class="form-control">
				<h3>
					<span>Last Name:</span>
				</h3>
				<input id="name" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Enter Your Last Name">
				@error('lastname')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror			
			</div>
			<div class="form-control">
				<h3>
					<span>email</span>
				</h3>
				<div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="example@gmail.com">
                         @error('email')
                                <span class="invalid-feedback" role="alert">
                               	 	<strong>{{ $message }}</strong>
                                </span>
                        @enderror
                </div>
			</div>
			<div class="form-control">
				<h3>
					<span>Product Delivery :</span>
				</h3>
				<input type="text" placeholder="Product Delivery example (cash on delivery)" id="product" name="delivery" required>
			</div>
			<hr>
			<div class="form-control">
			<label>Payment Options</label><br>
				<select id="Payment" name="payment">
					<option value=""></option>
					<option value="Mbob">Mbob</option>
					<option value="Cash on delivery">Cash on delivery</option>
				</select>
			</div>
			<div class="form-control">
				<h3>
					<span>Mobile Phone Number</span>
				</h3>
				<input id="mobilenumber" type="text" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus placeholder="Enter Your number (17733907)">
				<span id="messages" style="color: red"></span>
			</div>
			<hr>
			<button type="submit" vlaue="Submit">Submit</button>
		</form>
	</div>
</div>
</div>
</body>
</html>
<script src="{{asset('assets/js/sweetalert.js')}}"></script>
<script>
@if(session('status'))
	swal({
		title: '{{session('status')}}',
		icon: '{{session('statuscode')}}',
		button: "Done",
	})
@endif
</script>