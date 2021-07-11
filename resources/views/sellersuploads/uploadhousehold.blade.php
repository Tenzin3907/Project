@extends('layout.layouts')
@section('title')
  One More Time
@endsection

@section('content')

  <main id="main">

<!-- static profile -->
 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio section-bg">
      <div class="container">

      <div class="section-title" data-aos="fade-up">
          <h2 style="margin-top:20px;">User Uploads Portfolio</h2>
          <p>Regardless of whether you're creating a graphic design portfolio or web design ... In other words, don't include your most dull, unimaginative work unless you want ... Don't just upload pretty pictures to your portfolio. ... Unlike Dunked and Carbonmade, Portfoliobox has a free option you can use if you needs are modest.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
        @foreach($household as $households)
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <div class="height: 300px;">
                <img src="{{asset('uploadhouseholds/household1/' .$households->image1) }}" class="img-fluid" alt="" width="100%;" height="90px;">
                </div>
                <div class="portfolio-info">
                  <div class="portfolio-links">
                    <a href="{{route('householddetails',$households->id)}}" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
                <br>
                <div style="background-color:white;">
                  <h6>Title : {{$households->brand}}</h6>
                  <!-- <h6>Household-id : {{$households->id}}</h6> -->
                  <p>Price:<strong> Nu. {{$households->price}}</strong></p>

                  <div style="height:25px; overflow: hidden;">
                              <p>Discription: {{$households->description}}</p>
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
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
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
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
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
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
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
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
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
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
      
    </section><!-- End Team Section -->
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
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
                                        <h6>Your Rating</h6>
                                    </div> <!-- Radio Buttons for Rating-->
                                            <div class="form-check mb-4"> <input name="feedback" type="radio" value="Very good"> <label class="ml-3">Very good</label> </div>
                                            <div class="form-check mb-4"> <input name="feedback" type="radio"> <label class="ml-3">Good</label> </div>
                                            <div class="form-check mb-4"> <input name="feedback" type="radio"> <label class="ml-3">Bad</label> </div>
                                            <div class="form-check mb-4"> <input name="feedback" type="radio"> <label class="ml-3">Very Bad</label> </div>
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