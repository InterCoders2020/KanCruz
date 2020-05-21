@extends('layout')

  @section('content')

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Kan Cruz</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="rooms.html" class="nav-link">Rooms</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Rates</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="/contactUs" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="booking.html" class="nav-link">Booking</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 item" style="background-image: url('images/home_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Welcome</span>
              <h2 class="heading">Enjoy a rural experience</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="block-30 item" style="background-image: url('images/home_4.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Welcome</span>
              <h2 class="heading">Simple &amp; Cozy</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="block-30 item" style="background-image: url('images/home_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Welcome</span>
              <h2 class="heading">Food &amp; Drinks</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">

          <div class="block-32">
            <form action="#">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="check_out">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="guests">Guests</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow"></span></div>
                        <select name="" id="" class="form-control">
                          <option selected disabled value=""></option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>
                         </select>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="room">Room</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="" class="form-control">
                            <option selected disabled value=""></option>
                            <option value="">Estança 1</option>
                            <option value="">Estança 2</option>
                            <option value="">Estança 3</option>
                           </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3 align-self-end">
                  <button class="btn btn-primary btn-block">Check Availability</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="row site-section">
        <div class="col-md-12">
          <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Services</span>
              <h2 class="heading">Facilities &amp; Services</h2>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-double-bed"></span></div>
            <div class="media-body">
              <h3 class="heading">Cozy Rooms</h3>
              <p>Whether you are travelling solo, with your partner or family, our rooms are designed to bring you maximum comfort</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon"><img src="images/pet_icon.svg" width='75px'></span></div>
            <div class="media-body">
              <h3 class="heading">Pets Friendly</h3>
              <p>Planing a trip with your pet? Bring your furry friend and enjoy an unique walk in the Nature</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon"><img src="images/garden_icon.svg" width='75px'></span></div>
            <div class="media-body">
              <h3 class="heading">Garden</h3>
              <p>Enjoy a different experience harvesting every morning you own breakfast from our sustainable garden</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-taxi"></span></div>
            <div class="media-body">
              <h3 class="heading">Transfers</h3>
              <p>For your comfort and peace of mind our hotel offers a wide choice of transfers with professional chauffeurs from/to Barcelona</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-credit-card"></span></div>
            <div class="media-body">
              <h3 class="heading">Credit Card Payment</h3>
              <p>We accept: VISA, Mastercard, AMEX. In addition we accept pre-established credit approved accounts by the Hotel to charge back</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-dinner"></span></div>
            <div class="media-body">
              <h3 class="heading">Restaurant</h3>
              <p>Seasonal products of the highest quality produced locally. Our menu is a combination of traditional and modern cuisine.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section block-13 bg-light">
      <div class="container">
         <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Featured Rooms</span>
              <h2 class="heading">Rooms &amp; Suites</h2>
              <p>Choose your room and we will take care of everything to ensure you enjoy an unforgettable stay</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="nonloop-block-13 owl-carousel">
                  <div class="item">
                    <div class="block-34">
                      <div class="image">
                        <a href="#"><img src="images/cristofol_2.jpg" alt="Image placeholder"></a>
                      </div>
                      <div class="text">
                        <h2 class="heading">Estança de Sant Cristòfol</h2>
                        <div class="price"><sup>€</sup><span class="number">85</span><sub>/per night</sub></div>
                        <ul class="specs">
                          <li><strong>Guests:</strong> 4</li>
                          <li><strong>Categories:</strong> Quadruple</li>
                          <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV</li>
                          <li><strong>Size:</strong> 30m<sup>2</sup></li>
                          <li><strong>Bed Type:</strong> Two doubled </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="block-34">
                      <div class="image">
                        <a href="#"><img src="images/rocacentella_1.jpg" alt="Image placeholder"></a>
                      </div>
                      <div class="text">
                        <h2 class="heading">Estança del Rocacentella</h2>
                        <div class="price"><sup>€</sup><span class="number">85</span><sub>/per night</sub></div>
                        <ul class="specs">
                          <li><strong>Guests:</strong> 4</li>
                          <li><strong>Categories:</strong> Quadruple</li>
                          <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV/li>
                          <li><strong>Size:</strong> 50m<sup>2</sup></li>
                          <li><strong>Bed Type:</strong> One double and two single</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="block-34">
                      <div class="image">
                        <a href="#"><img src="images/puig_1.jpg" alt="Image placeholder"></a>
                      </div>
                      <div class="text">
                        <h2 class="heading">Estança del Puigraciós</h2>
                        <div class="price"><sup>€</sup><span class="number">85</span><sub>/per night</sub></div>
                        <ul class="specs">
                          <li><strong>Guests:</strong> 4</li>
                          <li><strong>Categories:</strong> Quadruple</li>
                          <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV</li>
                          <li><strong>Size:</strong> 25m<sup>2</sup></li>
                          <li><strong>Bed Type:</strong> One double and two single</li>
                        </ul>
                      </div>
                    </div>
                  </div>


              </div>

            </div> <!-- .col-md-12 -->
          </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Menu</span>
              <h2 class="heading">Restaurant Menu</h2>
            </div>
          </div>

        <div class="block-35">

          <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Ecologic Cuisine</a>
            </li>

          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/breakfast_1.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Spanish Tortilla</h2>
                          <p>It’s a simple, healthy and tasteful Mediterranean dish, with rural origins. It is typically served warm  with homemade bread</p>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/breakfast_2.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Fresh Vegetables</h2>
                          <p>Courgettes, bell peppers, aubergines, squash, carrots, radishes, between 10 and 15 different varieties flourish on our Garden</p>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/breakfast_3.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Grilled Chicken</h2>
                          <p>The basics are simple: Butterflied chicken with a spice rub gets slow-cooked on the grill, then quickly cooked over the coals to crisp the skin</p>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/breakfast_4.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Catalan Pasta</h2>
                          <p>A pesto base topped with caramelized onions, fire roasted tomatoes, feta, and arugula finished with our balsamic reduction</p>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/breakfast_5.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Crema Catalana</h2>
                          <p>This typical dessert is a cream made with a thin layer of caramelized sugar on top, which gives the perfect touch to the contrast between the cream & the candy</p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block-30 block-30-sm item" style="background-image: url('images/home_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12">
              <h2 class="heading">Quality accommodation that exceeds the expectations</h2>
              <p><a href="#" class="btn py-4 px-5 btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 section-heading">
            <span class="subheading-sm">Reviews</span>
            <h2 class="heading">Guest Reviews</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_3.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Martin Newmansfield</h2>
                  <span class="meta">Satisfied Customer</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; One of my best holidays ever! We were welcomed by Maria who was very friendly and hospitable. The Masia is stylish, warm and our room set on its own terrace. Breakfast was made by Maria and it was dealicious! &ldquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_2.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Nancy Green</h2>
                  <span class="meta">Satisfied Customer</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; We stayed here three nights as part of a walking holiday. The views from the terraces are magical. The food was superb. The chef there seems to know how to combine the flavours of local products so that they continually surprise and delight &ldquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_1.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Elizabeth Charles</h2>
                  <span class="meta">Satisfied Customer</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; We stayed here for Valentine's Day. It's very simple but lovely and the rooms very clean and beds comfortable. We enjoyed the lovely terrace and rocking chairs to sit on as we looked over the peaceful valley. It was an unforgettable weekend! &ldquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Contact Info</h3>
              <ul>
                <li><a href='#'><span class="icon icon-map-marker"></span><span class="text">Masia KanCruz, 08590, Figaró-Montmany, Catalunya, Spain</span></a></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+34 607304498</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">masiacanplans.montseny@gmail.com</span></a></li>
              </ul>
            </div>
        </div>


      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-left">
          <p>
            InterCoders &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>

  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


  @endsection
