@extends('layout.layouts')
@section('content')
<div class="body">
  <div class="main-body" style="margin-bottom:-5px;">
    <div class="right">
      <div class="right1">
            <div class="mySlides" style="width: 100%; height:75vh;">
    <div class="numbertext">1 / 6</div>
    
    <img src="{{asset('uploadtablet/tablet1/' .$data->image1) }}" style="width: 100%; height:75vh;">
  </div>

  <div class="mySlides" style="width: 100%;">
    <div class="numbertext">2 / 6</div>
    <img src="{{asset('uploadtablet/tablet2/' .$data->image2) }}" style="width: 100%; height:75vh;">
  </div>

  <div class="mySlides" style="width: 100%;">
    <div class="numbertext">3 / 6</div>
    <img src="{{asset('uploadtablet/tablet3/' .$data->image1) }}" style="width: 100%; height:75vh;">
  </div>
    
  <div class="mySlides" style="width: 100%;">
    <div class="numbertext">4 / 6</div>
    <img src="{{asset('uploadtablet/tablet4/' .$data->image4) }}" style="width: 100%; height:75vh;">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)" style="margin-top: 3%;">❮</a>
  <a class="next" onclick="plusSlides(1)" style="margin-top: 3%; margin-right:707px;">❯</a>

  <div class="caption-container" style="width: 100%; height: 45px; margin-top:10px; margin-bottom:-20px;">
    <p id="caption"></p>
  </div>

  <div class="row1">
    <div class="column1">
      <img class="demo cursor" src="{{asset('uploadtablet/tablet1/' .$data->image1) }}" style="width:100%; height: 30vh; margin-left: 5px;  margin-top: 25px;" onclick="currentSlide(1)" alt="Front">
    </div>
    <div class="column1">
      <img class="demo cursor" src="{{asset('uploadtablet/tablet2/' .$data->image2) }}"  style="width:100%; height: 30vh; margin-left:5px; margin-top: 25px;" onclick="currentSlide(2)" alt="Left-Side">
    </div>
    <div class="column1">
      <img class="demo cursor" src="{{asset('uploadtablet/tablet3/' .$data->image3) }}"  style="width:100%; height: 30vh; margin-left:5px; margin-top: 25px;" onclick="currentSlide(3)" alt="Back">
    </div>
    <div class="column1">
      <img class="demo cursor" src="{{asset('uploadtablet/tablet4/' .$data->image4) }}"  style="width:100%; height: 30vh; margin-left:5px; margin-top: 25px;" onclick="currentSlide(4)" alt=Back-side>
    </div>
  </div>
      </div><!--end of right1-->
      <div class="right2">
      <h1>Type : {{$data->brand}}</h1>
      <h4>Price: <strong>Nu. {{$data->price}}</strong></h4>
      <h6>Discription: {{$data->description}}</h6>
      <h6>Dzongkhag: {{$data->dzongkhag}}</h6>
      <h6>Name: {{$data->name}}</h6> 
      <h6>Number: {{$data->number}}</h6>
      @if($data->approve == false)       
      <a href="/tabletbuy/{{$data->id}}" class="btn bg-success" style="width:75px;">Buy</a>
      @else
        <p class="stock">Product has been already booked!&#128512; out of stock! &#128512;</p>
      @endif
      <style>
        .stock{
          border: 1px solid red;
          padding: 10px;
          color: red;
          background-color: #FFF0F5;
          box-shadow: 0 0 10px 5px;
          margin-top: 35px;
          margin-bottom: 20px;
        }
        </style>
    </div>
    </div><!--end of main-right-->
  </div><!--end of main-body-->
  <div class="card-body">
                <div class="table-responsive" >
                  <table id="datatable" class="table table-striped table-bordered ">
                    <thead class=" text-primary text-capitalize">
                    <tbody> 
                    </tbody>
                  </table>
                </div>
              </div>
              <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Some of featured product</h2>
        </div>
       <div class="row" data-aos="fade-up">
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="/assets/img/tablet.jpg" class="img-fluid" alt="" style="width:100%;">
              <div class="portfolio-info">
              <h4>View More Item</h4>
                <p>Tablet related</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"></a>
                  <a href="/uploadtab" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="/assets/img/camera.jpg" class="img-fluid" alt="" style="width:100%;">
              <div class="portfolio-info">
              <h4>View More Item</h4>
                <p>Camera related</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"></a>
                  <a href="/uploadcam" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="/assets/img/harddisk.jpg" class="img-fluid" alt="" style="width:100%;">
              <div class="portfolio-info">
              <h4>View More Item</h4>
                <p>Harddisk related</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"></a>
                  <a href="/uploadhard" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

      </div>

</div>

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
@endsection

