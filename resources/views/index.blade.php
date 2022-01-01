@extends('layouts.app')

@section('content')

  <!-- Main Content-->
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-12 col-lg-8 col-xl-12">
        <!-- news-->
        <div class="col-md-12 content-center" id="who-we-are">
            <h3 class="text-center">NEWS</h3>
            
            <p class="lead text-center">
                Starting up the team project <br>
                Our recent actions:
            </p>

            <section class="pt-5 pb-5">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3">New Articles</h3>
                        </div>

                        <!-- carousel controls -->
                        <div class="col-6 text-end">
                            <button class="btn btn-primary btn-sm" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="btn btn-primary btn-sm" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                        </div>
                        
                        <!-- carousel items -->
                        <div class="col-12">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
            
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            
                                                    </div>
            
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            
                                                    </div>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
            
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            
                                                    </div>
            
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            
                                                    </div>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
            
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            
                                                    </div>
            
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Special title treatment</h4>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            
        </div>

        <!-- who we are -->
        <div class="col-md-12 content-center" id="who-we-are">
            <h3 class="text-center">WHO WE ARE</h3>
            
            <p class="lead">
                We are a non-governmental, non-profit organization founded with the passion to help people in Cambodia to know more about technology.
            </p>
        </div>

        <!-- what we do -->
        <div class="col-md-12" id="what-we-do">
            <h3 class="text-center">WHAT WE DO</h3>
            
            <p class="lead">
                We are here with the vision to help Cambodia people to use technology by sharing them knowledges, benefits, plans, and news.
        </div>

        <!-- donate -->
        <div class="col-md-12" id="donate">
            <h3 class="text-center">DONATE</h3>
            
            <p class="lead">
                If you are interested in supporting KhmerTechInsider project. You can do that by donating us a coffee or whole days of meal in accordingly.
            </p>
        </div>

        <!-- career -->
        <div class="col-md-12" id="career">
          <h3 class="text-center">CAREER</h3>
          
          <p class="lead">
              If you are interested in working in our project. Do sent us your Curriculum Vitae to this G-mail: sereybot164@gmail.com
          </p>
        </div>

        <!-- Contact -->
        <div class="col-md-12" id="contact">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <!-- <div class="col-md-8">
                        <div class="well well-sm">
                            <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                            </span>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                            Subject</label>
                                        <select id="subject" name="subject" class="form-control" required="required">
                                            <option value="na" selected="">Choose One:</option>
                                            <option value="service">General Customer Service</option>
                                            <option value="suggestions">Suggestions</option>
                                            <option value="product">Product Support</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                        Send Message</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div> -->
                <!-- Wrapper container -->
                <div class="container py-4">

                    <!-- Bootstrap 5 starter form -->
                    <form class="border border-4 rounded p-3" id="contactForm">
                
                    <div class="row">
                        <div class="col-6">
                            <!-- Name input -->
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" id="name" type="text" placeholder="Name" />
                            </div>

                            <!-- Phone Numbers -->
                            <div class="mb-3">
                                <label class="form-label" for="phone">Phone Numbers</label>
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Phone Numbers" />
                            </div>
                        
                            <!-- Email address input -->
                            <div class="mb-3">
                                <label class="form-label" for="emailAddress">Email Address</label>
                                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
                            </div>
                        </div>

                        <div class="col-6">
                            <!-- Message input -->
                            <div class="mb-3">
                                <label class="form-label" for="message">Message</label>
                                <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
                            </div>
                        </div>

                        <hr>

                        <!-- Form submit button -->
                        <div class="d-grid col-3 mx-auto">
                            <button class="btn btn-primary btn-lg rounded btn-danger" type="submit">Send Message</button>
                        </div>
                    </div>
                    </form>
                
                </div>
                </div>
            </div>
        </div>
          
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
      <!-- Left -->
      <div class="me-5"><span>Get connected with us on social networks:</span></div>
      <!-- Left -->

      <!-- Right -->
      <div>
          <a href="" class="text-white me-4">
              <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="text-white me-4">
              <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="text-white me-4">
              <i class="fab fa-google"></i>
          </a>
          <a href="" class="text-white me-4">
              <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="text-white me-4">
              <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="text-white me-4">
              <i class="fab fa-github"></i>
          </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
      <!-- Content -->
          <h6 class="text-uppercase fw-bold">Company name</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
          <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
          </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
      <!-- Links -->
          <h6 class="text-uppercase fw-bold">Products</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
              <a href="#!" class="text-white">MDBootstrap</a>
          </p>
          <p>
              <a href="#!" class="text-white">MDWordPress</a>
          </p>
          <p>
              <a href="#!" class="text-white">BrandFlow</a>
          </p>
          <p>
              <a href="#!" class="text-white">Bootstrap Angular</a>
          </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
      <!-- Links -->
          <h6 class="text-uppercase fw-bold">Useful links</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
              <a href="#!" class="text-white">Your Account</a>
          </p>
          <p>
              <a href="#!" class="text-white">Become an Affiliate</a>
          </p>
          <p>
              <a href="#!" class="text-white">Shipping Rates</a>
          </p>
          <p>
              <a href="#!" class="text-white">Help</a>
          </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
      <!-- Links -->
          <h6 class="text-uppercase fw-bold">Contact</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
      <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3"style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright: <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
    
  </footer>

@endsection