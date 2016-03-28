@extends('app')

@section('content')

      <!-- Header -->
      <header id="top" class="header">
          <div class="text-vertical-center">
              <h1 class="logotext">Cronic</h1>
              <h3>Log your illness &amp; take control</h3>
              <br>
              <a href="#about" class="btn btn-dark btn-lg">Find out more</a>
          </div>
      </header>

      <!-- About -->
      <section id="about" class="about">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <h2>Cronic helps you to log your illness so you can have better control over it</h2>
                      <p class="lead">You cannot improve something unless you know what is wrong with it!</p>
                  </div>
              </div>
              <!-- /.row -->
          </div>
          <!-- /.container -->
      </section>

      <!-- Services -->
      <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
      <section id="services" class="services bg-primary">
          <div class="container">
              <div class="row text-center">
                  <div class="col-lg-10 col-lg-offset-1">
                      <h2>Our Services</h2>
                      <hr class="small">
                      <div class="row">
                          <div class="col-md-3 col-sm-6">
                              <div class="service-item">
                                  <span class="fa-stack fa-4x">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                              </span>
                                  <h4>
                                      <strong>Service Name</strong>
                                  </h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                  <a href="#" class="btn btn-light">Learn More</a>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-6">
                              <div class="service-item">
                                  <span class="fa-stack fa-4x">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-compass fa-stack-1x text-primary"></i>
                              </span>
                                  <h4>
                                      <strong>Service Name</strong>
                                  </h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                  <a href="#" class="btn btn-light">Learn More</a>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-6">
                              <div class="service-item">
                                  <span class="fa-stack fa-4x">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-flask fa-stack-1x text-primary"></i>
                              </span>
                                  <h4>
                                      <strong>Service Name</strong>
                                  </h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                  <a href="#" class="btn btn-light">Learn More</a>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-6">
                              <div class="service-item">
                                  <span class="fa-stack fa-4x">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-shield fa-stack-1x text-primary"></i>
                              </span>
                                  <h4>
                                      <strong>Service Name</strong>
                                  </h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                  <a href="#" class="btn btn-light">Learn More</a>
                              </div>
                          </div>
                      </div>
                      <!-- /.row (nested) -->
                  </div>
                  <!-- /.col-lg-10 -->
              </div>
              <!-- /.row -->
          </div>
          <!-- /.container -->
      </section>

      <!-- Callout -->
      <aside class="callout">
          <div class="text-vertical-center">
              <h1>For doctors and patients</h1>
          </div>
      </aside>



      <!-- Call to Action -->
      <aside class="call-to-action bg-primary">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <h3>Are you already a Cronic user?</h3>
                      <a href="#" class="btn btn-lg btn-light">Sign up</a>
                      <a href="#" class="btn btn-lg btn-dark">Log in</a>
                  </div>
              </div>
          </div>
      </aside>



      <!-- Footer -->

@endsection
