@extends('layout.layouts')
@section('title')
  One More Time
@endsection

@section('content')

<!-- slider -->
<section id="carousel" style="margin-top: 10px; margin-bottom:-75px;">
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                @if (session('Mystatus'))
                        <div class="alert alert-success" role="alert">
                            {{ session('Mystatus') }}
                        </div>
                    @endif
                    <!-- <div class="container"> -->
                      <div id="slider">
                          <figure>
                            <img src="assets/img/travel-camera.jpg">
                            <img src="assets/img/bg5.jpg">
                            <img src="assets/img/smartphones.jpg">
                            <img src="assets/img/books.jpg">
                            <img src="assets/img/latest-electronic-gadgets.jpg">
                            <img src="assets/img/about-img.jpg">
                          </figure>
                        </div>
                      </div>
                  <!-- </div> -->
                </div>
                  
        </section>
<!-- end slider -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7 image" data-aos="fade-right">
            <img src="assets/img/about-img.jpg" class="img-fluid" alt="" style="width:100%;height:95vh;box-shadow: 5px 10px 8px 10px grey;">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
		<div class="content" style="box-shadow: 5px 10px 8px 10px grey;height:95vh;">
			<h2>About Us</h2><span></span>
			<p style="color:black;">A used good, or second-hand good, is a piece of personal property that is being purchased by or otherwise transferred to a second or later end user. A used good may also simply mean it is no longer in the same condition as it was transferred to the current owner.</p>
			<ul class="links">
				<li><a href="#portfolio">Work</a></li>
				<div class="vertical-line"></div>
				<li><a href="#services">Service</a></li>
				<div class="vertical-line"></div>
				<li><a href="#about">Contact</a></li>
				<div class="vertical-line"></div>
			</ul>
			<div style="margin-left:35px; margin-top:-15px;">
                <a href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
		</div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>These days, it’s not just enough to have a website for your business. You also need an easy way to create, promote, and sell your products and services online. Whether you’re an artist, writer, freelancer, or home service provider, the right directory or marketplace can mean the difference between surviving and thriving.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Second-Hand Furniture</a></h4>
              <p class="description" style="color:black;">Look around your house. I’m sure there’s lots of furniture that you don’t think needs to be replaced. It’s perfectly good!</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Second-Hand Electronics</a></h4>
              <p class="description" style="color:black;">This one is so broad that we’ll just briefly touch on each – second-hand electronics can be bought for a MASSIVE discount when compared to their original price!</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Used Books</a></h4>
              <p class="description" style="color:black;">This one is even more true now that eBooks are so popular!

If you still like real, actual books – buying used books are practically a must.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Tools & Home Care Supplies</a></h4>
              <p class="description" style="color:black;">Rounding off our list of Top 10 most popular second hands items are tools and home care supplies!

Smaller hand-tools like hammers, wrenches, and screw drivers...</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Services Section -->

<!-- static profile -->
 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Product</h2>
          <p>Another factor in good customer service involves the timeliness of your responses. Customers appreciate a speedy response to their inquiries, especially when they have a time-sensitive request.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/computer.jpg" class="img-fluid" alt="" style="width:100%;">
              <div class="portfolio-info">
                <h4>View More Item</h4>
                <p>Computer related</p>
                <div class="portfolio-links" >
                  <!-- <a href="assets/img/portfolio/computer.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"></a> -->
                  <a href="/uploadcom" title="More Details" style="margin-bottom:20px;"><i class="bx bx-link"></i>
                </div>
                @foreach($Computer as $key=>$computer)
                  @endforeach
                   <h5 style="color:white;"><mark> Stock : <strong>{{$key+1}}</strong></mark></h5>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/camera.jpg" class="img-fluid" alt="" style="width:100%;">
              <div class="portfolio-info">
              <h4>View More Item</h4>
                <p>Camera related</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"></a>
                  <a href="/uploadcam" title="More Details" style="margin-bottom:20px;"><i class="bx bx-link"></i></a>
                </div>
                @foreach($camera as $key=>$camera)
                @endforeach
                <h5 style="color:white;"><mark> Stock : <strong>{{$key+1}}</strong></mark></h5>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/tv.jpg" class="img-fluid" alt="" style="width:100%;">
              <div class="portfolio-info">
              <h4>View More Item</h4>
                <p>Television related</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"></a>
                  <a href="/uploadtv" title="More Details" style="margin-bottom:20px;"><i class="bx bx-link"></i></a>
                </div>
                @foreach($television as $key=>$data)
                @endforeach
                <h5 style="color:white;"><mark> Stock : <strong>{{$key+1}}</strong></mark></h5>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/harddisk.jpg" class="img-fluid" alt="" style="width:100%;">
              <div class="portfolio-info">
              <h4>View More Item</h4>
                <p>Harddisk related</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"></a>
                  <a href="/uploadhard" title="More Details" style="margin-bottom:20px;"><i class="bx bx-link"></i></a>
                </div>
                @foreach($harddisk as $key=>$data)
                @endforeach
                <h5 style="color:white;"><mark> Stock : <strong>{{$key+1}}</strong></mark></h5>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/book.jpg" class="img-fluid" alt="" style="width:100%;">
              <div class="portfolio-info">
              <h4>View More Item</h4>
                <p>Book related</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"></a>
                  <a href="/uploadsbook" title="More Details" style="margin-bottom:20px;"><i class="bx bx-link"></i></a>
                </div>
                @foreach($book as $key=>$data)
                @endforeach
                <h5 style="color:white;"><mark> Stock : <strong>{{$key+1}}</strong></mark></h5>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/household.jpg" class="img-fluid" alt="" style="width:100%;">
              <div class="portfolio-info">
              <h4>View More Item</h4>
                <p>Furniture Household related</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"></a>
                  <a href="/uploadhouses" title="More Details" style="margin-bottom:20px;"><i class="bx bx-link"></i></a>
                </div>
                @foreach($household as $key=>$households)
                @endforeach
                <h5 style="color:white;"><mark> Stock : <strong>{{$key+1}}</strong></mark></h5>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/sofa.jpg"alt="sofa.jpg" class="img-fluid" alt="" style="width:100%;">
              <div class="portfolio-info">
              <h4>View More Item</h4>
                <p>Furniture Sofa related</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"></a>
                  <a href="/uploadssofa" title="More Details" style="margin-bottom:20px;"><i class="bx bx-link"></i></a>
                </div>
                @foreach($sofa as $key=>$sofas)
                @endforeach
                <h5 style="color:white;"><mark> Stock : <strong>{{$key+1}}</strong></mark></h5>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/homeappliance.jpg" class="img-fluid" alt="" style="width:100%;">
              <div class="portfolio-info">
              <h4>View More Item</h4>
                <p>Homeappliance related</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"></a>
                  <a href="/uploadappliances" title="More Details" style="margin-bottom:20px;"><i class="bx bx-link"></i></a>
                </div>
                @foreach($homeappliance as $key=>$homeappliances)
                @endforeach
                <h5 style="color:white;"><mark> Stock : <strong>{{$key+1}}</strong></mark></h5>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/accessories.png" class="img-fluid" alt="" style="width:100%;">
              <div class="portfolio-info">
              <h4>View More Item</h4>
                <p>Accessories related</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"></a>
                  <a href="/uploadaccess" title="More Details" style="margin-bottom:20px;"><i class="bx bx-link"></i></a>
                </div>
                @foreach($accessories as $key=>$data)
                @endforeach
                <h5 style="color:white;"><mark> Stock : <strong>{{$key+1}}</strong></mark></h5>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/mobile.jpg" class="img-fluid" alt="" style="width:100%;">
              <div class="portfolio-info">
              <h4>View More Item</h4>
                <p>Mobile related</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"></a>
                  <a href="/uploadphone" title="More Details" style="margin-bottom:20px;"><i class="bx bx-link"></i></a>
                </div>
                @foreach($mobile as $key=>$data)
                @endforeach
                <h5 style="color:white;"><mark> Stock : <strong>{{$key+1}}</strong></mark></h5>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/tablet.jpg" class="img-fluid" alt="" style="width:100%;">
              <div class="portfolio-info">
              <h4>View More Item</h4>
                <p>Tablet related</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"></a>
                  <a href="/uploadtab" title="More Details" style="margin-bottom:20px;"><i class="bx bx-link"></i></a>
                </div>
                @foreach($tablet as $key=>$data)
                @endforeach
                <h5 style="color:white;"><mark> Stock : <strong>{{$key+1}}</strong></mark></h5>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Admin Upload Product</h2>
          <p>Keeping promises to your customers will help you build a strong relationship with them to show you respect them and that you’re worthy of their trust. It’s important to remember that any commitment is a promise.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
            </ul>
          </div>
        </div>

        
        <div class="row portfolio-container" data-aos="fade-up">
          @foreach($Product as $key=>$data)
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <div class="height: 300px;">
                <img src="{{asset('uploads/Product/' .$data->Image) }}" class="img-fluid" alt="" width="100%;" height="90px;">
                </div>
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <!-- <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a> -->
                    <a href="{{route('details',$data->id)}}" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
                <br>
                <div style="background-color:white;">
                  <h6>Product Name : {{$data->PName}}</h6>
                  <p>Price: <strong>Nu. {{$data->Price}}</strong></p>
                  <!-- <h6><mark>Stock :<strong> {{$key+1}}</strong></mark></h6> -->
                  <div style="height:25px; overflow: hidden;">
                              <p>Discription: {{$data->Discription}}</p>
                        </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Teamwork is the collaborative effort of a group to achieve a common goal or to complete a task in the most effective and efficient way. This concept is seen within the greater framework of a team, which is a group of interdependent individuals who work together towards a common goal.</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <img src="assets/img/image1.jpg" class="img-fluid" alt="" style="width:100%;height:45vh;">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Wangmo</h4>
                  <span>Chief Executive Officer</span>
                </div>
                <div class="social">
                <a href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/image3.jpg" class="img-fluid" alt="" style="width:100%;height:45vh;">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ugyen Jamtsho</h4>
                  <span>Product Manager</span>
                </div>
                <div class="social">
                <a href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/image2.jpg" class="img-fluid" alt="" style="width:100%;height:45vh;">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sonam Choden</h4>
                  <span>Accountant</span>
                </div>
                <div class="social">
                <a href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/image4.jpg" class="img-fluid" alt="" style="width:100%;height:45vh;">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Tenzin Gyeltshen</h4>
                  <span>CTO</span>
                </div>
                <div class="social">
                <a href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
     
    </section><!-- End Team Section -->
    @if(session('mystatus'))
		<div class="alert alert-success">
			{{session('mystatus')}}
		</div>
	@endif
      <form action="/feedback-user" method="POST">
      {{csrf_field()}}
                                   
                  <button type="button" class="btn btn-info btn-lg float-right"  data-toggle="modal" data-target="#myModal">Your Feedback</button>
                  <!--Division for Modal-->
                  <div id="myModal" class="modal fade" role="dialog">
                      <!--Modal-->
                      <div class="modal-dialog">
                          <!--Modal Content-->
                          <div class="modal-content">
                                    
                                    <div class="modal-header">
                                        <h3>Feedback Request Form</h3>
                                        <!--Close/Cross Button--> <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                                    </div> <!-- Modal Body-->
                                    <div class="modal-body text-center"> <i class="far fa-file-alt fa-4x mb-3 animated rotateIn icon1"></i>
                                        <h3>Your opinion matters</h3>
                                        <h5>Help us improve our website. <strong>Give us your feedback.</strong></h5>
                                        <hr>
                                    
                                        <div class="form-floating mb-3" >
                                            <label for="floatingInput"></label>
                                            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Your email here">
                                            
                                        </div>
                                        <h6>How is it ?</h6>
                                    </div> <!-- Radio Buttons for Rating-->
                                            <div class="form-check mb-4"> <input name="feedback" type="radio" value="Very good"> <label class="ml-3">Very good</label> </div>
                                            <div class="form-check mb-4"> <input name="feedback" type="radio" value="Good"> <label class="ml-3">Good</label> </div>
                                            <div class="form-check mb-4"> <input name="feedback" type="radio" value="Bad"> <label class="ml-3">Bad</label> </div>
                                            <div class="form-check mb-4"> <input name="feedback" type="radio" value="Very Bad"> <label class="ml-3">Very Bad</label> </div>
                                            <!--Text Message-->
                                            <div class="text-center">
                                                <h4>What could we improve?</h4>
                                            </div> <textarea type="textarea"name="message" placeholder="Your Message" rows="3"></textarea> <!-- Modal Footer-->
                
                                         <div class="modal-footer"> 
                                            <button type="submit" class="btn btn-primary">submit</button>
                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">close</button>
                                    </div>
                                </form>



  </main><!-- End #main -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  @endsection
  <script src="{{asset('assets/js/sweetalert.js')}}"></script>
<script>
@if(session('mystatus'))
	swal({
		title: '{{session('mystatus')}}',
		icon: '{{session('statuscode')}}',
		button: "Done",
	})
@endif
</script>