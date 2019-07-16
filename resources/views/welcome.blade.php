<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head class="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chef-Stop</title>

         <!-- Fonts -->
         <!-- Latest compiled and minified CSS 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         Latest compiled and minified CSS -->
    

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }} ">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <!--<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">-->
    </head>
    <body>
  <!-- navbar -->

  <nav class="navbar navbar-expand-lg fixed-top ">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-4">
          
          <li class="nav-item">
            <a class="nav-link" data-value="about" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-value="about" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " data-value="portfolio" href="#">Ratings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " data-value="blog" href="#">Hire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " data-value="team" href="#">
            Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " data-value="contact" href="#">Contact Us</a>
          </li>
        </ul>
        
      </div>
</nav>
<!-- header -->
<header class="header ">
  <div class="overlay"></div>
   <div class="container">
      <div class="description ">
    <h1>
        Hello ,Welcome To Chef Stop
        <p>
        Chef Stop continously aims to connect the right professionals with a happy Task.
        Transform your configuration into a versioned executable, human readable code.</p>
        <button class="btn btn-outline-secondary btn-lg">Learn More</button>
    </h1>
  </div>
   </div>
  
</header>

<!-- about section -->
<div class="about" id="about">
    <div class="container">
      <h1 class="text-center">About US</h1>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/team-3.jpg" class="img-fluid">
                <span class="text-justify">Senior Chef</span>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 desc">
              
                <h3>Chef Stop</h3>
                <p>
                   Transform your daily chef tasks into just notes that are just written down on a notepad
                   by using chef stop to just booking a chef and based on their speciality and payment.
                </p>
                <p>
                   Transform your daily chef tasks into just notes that are just written down on a notepad
                   by using chef stop to just booking a chef and based on their speciality and payment.
                </p>
                <p>
                   Transform your daily chef tasks into just notes that are just written down on a notepad
                   by using chef stop to just booking a chef and based on their speciality and payment.
                </p>
                Call US now on (0722) 999 000
            </div>
        </div>
    </div>
</div>

<!-- portfolio -->
<div class="portfolio" id="portfolio">
     <h1 class="text-center">Popular Cuisines</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/portfolio/port13.png" class="img-fluid">
                 <h6>Indian Cuisine</h6>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/portfolio/port1.png" class="img-fluid">
                <h6>Indian Cuisine</h6>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/portfolio/port6.png" class="img-fluid">
                <h6>Indian Cuisine</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/portfolio/port3.png" class="img-fluid">
                <h6>Indian Cuisine</h6>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/portfolio/port11.png" class="img-fluid">
                <h6>Indian Cuisine</h6>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/portfolio/electric.png" class="img-fluid">
                <h6>Indian Cuisine</h6>
            </div>
        </div>
    </div>
</div>


<!-- Posts section -->
<div class="blog" id="blog">
    <div class="container">
    <h1 class="text-center">Blog</h1>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-img">
                        <img src="images/posts/polit.jpg" class="img-fluid">
                    </div>
                    
                    <div class="card-body">
                    <h4 class="card-title">Try our new African Cuisine</h4>
                        <p class="card-text">
                            
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-img">
                        <img src="images/posts/images.jpg" class="img-fluid">
                    </div>
                    
                    <div class="card-body">
                       <h4 class="card-title">Chef Stop for your graduation</h4>
                        <p class="card-text">
                            
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-img">
                        <img src="images/posts/imag2.jpg" class="img-fluid">
                    </div>
                    
                    <div class="card-body">
                    <h4 class="card-title">Chef Mike recieves award</h4>
                        <p class="card-text">
                            
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team section -->
<div class="team" id="team">
    <div class="container">
       <h1 class="text-center">Testimonials</h1>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 item">
                <img src="images/team-2.jpg" class="img-fluid" alt="team">
                <div class="des">
                    Chef Hodari
                 </div>
                <span class="text-muted">Story</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 item">
                <img src="images/team-3.jpg" class="img-fluid" alt="team">
                <div class="des">
                     Chef Zack
                 </div>
                <span class="text-muted">Story</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 item">
                <img src="images/team-2.jpg" class="img-fluid" alt="team">
                <div class="des">
                    Chef Oscar 
                 </div>
                <span class="text-muted">Story</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 item">
                <img src="images/team-3.jpg" class="img-fluid" alt="team">
                <div class="des">
                     Chef Zack
                 </div>
                <span class="text-muted">Story</span>
            </div>
        </div>
    </div>
</div>

<!-- Contact form -->
<div class="contact-form" id="contact">
    <div class="container">
        <form>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <h1>Get in Touch</h1> 
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 right">
                   <div class="form-group">
                     <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="">
                   </div>
                   <div class="form-group">
                     <input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" name="email">
                   </div>
                   <div class="form-group">
                     <textarea class="form-control form-control-lg">
                        
                     </textarea>
                   </div>
                   <input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- add Javasscript file from js file -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>
</html>