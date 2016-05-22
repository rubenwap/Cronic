@extends('app')

@section('content')

      <!-- Header -->
      <header id="top" class="header">
          <div class="text-vertical-center">
              <h1 class="logotext">Cronic</h1>
              <h3>Log your illness &amp; take control</h3>
              <br>
              <a href="#about" id="btnfind" class="btn btn-dark btn-lg">Find out more</a>
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
                  
                  
                  <div class = "intro">
                  <i class="fa fa-pencil-square-o fa-5x" aria-hidden="true"></i>
                       <p class="lead" > Keep track of your illness</p>
                  </div>
                  
                      <div class = "intro">
                  <i class="fa fa-user-md fa-5x" aria-hidden="true"></i>
                    <p class="lead">Let a doctor review your entries</p>
                  </div>
                  
                           <div class = "intro">
                  <i class="fa fa-bell-o fa-5x" aria-hidden="true"></i>
                    <p class="lead">Don´t miss any medical appointment or medicine schedule</p>
                  </div>
                  
                        <div class = "intro">
                  <p class="lead"><a href="{{ url('/register') }}">Sign up</a> today or <a href="{{ url('/login') }}">log in</a> if you already have an account</p>
    </div>
                  
                  
                  
              </div>
              <!-- /.row -->
          </div>
          <!-- /.container -->
      </section>




      <!-- Footer -->

@endsection
