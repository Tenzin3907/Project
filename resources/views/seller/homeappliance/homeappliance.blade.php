<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Second-hand Marketing</title>
	<link rel="stylesheet" type="text/css" href="css/styls.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Bree+Serif&family=Jomhuria&family=Squada+One&family=Ultra&display=swap" rel="stylesheet">
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
</style>
</head>
<body>
<!-- seller header  and logo-->
<div class="navagation">
    <a href="/sells" class="previous round">&#8249;</a>
    <!-- <a href="#" class="next round">&#8250;</a> -->

    <a href="#" class="logoo">One More Time</a>
    
</div>
<!-------------sellers side---------->
<div class="small-container">
	<div class="row">
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
		<form action="{{url('save-homeappliance-datas') }}"  class="form" method="POST"  enctype="multipart/form-data" onsubmit="return myfun()">
		{{csrf_field() }}
			<h2>
					<span>Select Category</span>
				</h2>
			<div class="ul">
			<ul>
				<li>
					<a><h1><i>Homeappliance - Appliance</i></h1></a>
				</li>
			</ul>
			</div>
			<hr>
			<h3 style="margin-bottom: 10px;">
				<span><i>INCLUDE DETAILS</i></span>
			</h3>
			<div class="form-control">
				<h3>
					<span>homeappliance</span>
				</h3>
				<input type="text" name="title" placeholder="title" id="title" required>
			</div>
			<hr>
			<div class="form-control">
				<h3>
					<span>Set a price</span>
				</h3>
				<input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus placeholder="Nu. ">
				@error('price')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
			<hr>
			<div class="form-control">
				<h3 style="margin-bottom: 10px;">
					<span>Description</span>
				</h3>
				<textarea name="description" placeholder="Enter your Description" required></textarea>
			</div>
			<div class="form-control">
				<h3 style="margin-bottom: 10px;">
					<span>Dzongkhag</span>
				</h3>
				<select class="select" name="dzongkhag">
					<option></option>
					<option value="Bumthang">Bumthang</option>
					<option value="Chhukha">Chhukha</option>
					<option value="Dagana">Dagana</option>
					<option value="Gasa">Gasa</option>
					<option value="Haa">Haa</option>
					<option value="Lhuentse">Lhuentse</option>
					<option value="Mongar">Mongar</option>
					<option value="Paro">Paro</option>
					<option value="PemaGatshel">PemaGatshel</option>
					<option value="Punakha">Punakha</option>
					<option value="Samtse">Samtse</option>
					<option value="Sarpang">Sarpang</option>
					<option value="Samdrup Jongkhar">Samdrup Jongkhar</option>
					<option value="Thimphu">Thimphu</option>
					<option value="Trashigang">Trashigang</option>
					<option value="Trashi Yangtse">Trashi Yangtse</option>
					<option value="Trongsa">Trongsa</option>
					<option value="Tsirang">Tsirang</option>
					<option value="Wangdi">Wangdi</option>
					<option value="Zhemgang">Zhemgang</option>
				</select>
			</div>
            <div class="form-control">
				<div class="mb-3">
				<label>Image1</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" name="image1" class="form-control">
						</div>
					</div>
				</div>
            </div>
			<div class="form-control">
				<div class="mb-3">
				<label>Image2</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" name="image2" class="form-control">
						</div>
					</div>
				</div>
            </div>
			<div class="form-control">
				<div class="mb-3">
				<label>Image3</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" name="image3" class="form-control">
						</div>
					</div>
				</div>
            </div>
			<div class="form-control">
				<div class="mb-3">
				<label>Image4</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" name="image4" class="form-control">
						</div>
					</div>
				</div>
            </div>
			<hr>
			<div class="form-control">
				<h3>
					<span>Review Your Details</span>
				</h3>
				<label>Name</label><br>
				<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your name">
				@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
			<div class="form-control">
				<h3>Enter Your Correct Number</h3><br>
				<span>Please enter your valid phone number with correct information</span>
			</div>
			<div class="form-control">
				<h3>
					<span>Mobile Phone Number</span>
				</h3>
				<input id="mobilenumber" type="text" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus placeholder="Enter Your number (17733907)">
				<span id="messages" style="color: red"></span>
			</div>
			<hr>
			<button>Post now</button>
		</form>
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
				document.getElementById("messages").innerHTML="** Mobile Number must start with 1 or 7";
			return false;
			}
			if ((a.charAt(1)!=7)){
				document.getElementById("messages").innerHTML="** Second number must be 7";
			return false;
			}
		}
	</script>
