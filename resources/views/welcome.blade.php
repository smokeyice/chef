<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head class="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chef-Stop</title>

         <!-- Fonts -->
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
    

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/webapp.css') }} ">
      <!--   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
 -->
    </head>
    <body>
        <header>
            <div class="container">
                <!-- Top part of Navigation with login, registration and logo as well -->
                <div class="top-nav container">
                    <div class="logo"> 
                        Chef-Stop  
                    </div>

                    <div class="account-section">

                        <ul>     
                        <input type="text" placeholder="Search..." class="search">     
                               <li><a href="#">Login</a></li>|
                               <li><a href="#">Register</a></li>
                        </ul>

                    </div>
                
                    <div>
                                <ul class="nav-bar">
                                  <li><a href="#">Home</a></li>
                                  <li><a href="#">Why chef-stop</a></li>
                                  <li><a href="#">Contact us</a></li>
                                  <li><a href="#">Hire</a></li>
                                  <li><a href="#">Recruit</a></li>
                                  <li><a href="#">Ratings & Reviews</a></li>
                            
                                </ul>
                    </div>

                </div> <!-- End Top-Nav -->


                     <div>
                         <img src="img/Chef1.jpg" width="100%" height="400" alt="Chef of the Month Image">
                         <!-- <div class="text">Chef of the Month</div> -->
                     </div>
        </div>

        </header>

         <div class="hero container">
                <div class="hero-copy">
                    <h2 class="text-center">Chef-Stop Continuosly aims to connect the Professional with a Happy Clientelle</h2>

                    <p>As our environments grow in size and complexity, manual processes can become a barrier to deploying changes with confidence and consistency. Systems are missed during software updates or scheduled maintenance leading to unpredictable configuration drift across your estate. Unexpected and difficult to diagnose failures are uncovered late in the development cycle due to inconsistently configured environments between development and production. All this results in delayed releases, costly rollbacks, and too much time spent on unplanned work.
                    <br><br>
                    Transform your configuration into versioned, executable, human-readable code. Per-deployment differences can be accounted for dynamically, reducing duplicated effort between teams and environments, and ensuring consist configurations across the development lifecycle.</p>

                   <a href="#">Learn More...</a>
                </div>
            </div>

            <div class="featured-cuisines">
                <div class="container">
                    <h2 class="text-center">Popular Cuisines</h2>

                    <div class="cuisines text-center">
                        <div class="cuisine">
                            <a href="#"><img src="img/indian.jpg" alt="Indian Cuisine Image"></a>

                            <a href="#"><span class="cuisine-name">Indian Cuisine</span></a>
                            It consists... 
                        </div>


                        <div class="cuisine">
                            <a href="#"><img src="img/AfricanCuisine.jpg" alt="African Cuisine Image"></a>

                            <a href="#"><span class="cuisine-name">African Cuisine</span></a>
                            It consists... 
                        </div>

                        <div class="cuisine">
                            <a href="#"><img src="img/Fufu.jpg" alt="Chinese Cuisine Image"></a>

                            <a href="#"><span class="cuisine-name">Chinese Cuisine</span></a>
                            It consists... 
                        </div>

                        
                        <div class="cuisine">
                            <a href="#"><img src="img/indian.jpg" alt="European Cuisine Image"></a>

                            <a href="#"><span class="cuisine-name">European Cuisine</span></a>
                            It consists... 
                        </div>
                        

                        <div class="cuisine">
                            <a href="#"><img src="img/AfricanCuisine.jpg" alt="Arabian Cuisine Image"></a>

                            <a href="#"><span class="cuisine-name">Arabian Cuisine</span></a>
                            It consists... 
                        </div>

                
                        <div class="cuisine">
                            <a href="#"><img src="img/Fufu.jpg" alt="Thailand Cuisine Image"></a>

                            <a href="#"><span class="cuisine-name">Thailand Cuisine</span></a>
                            It consists... 
                        </div>
                
            </div> <!-- End Products -->

            <div class="text-center">
                <a href="#">More Cuisines...</a>
            </div>

        </div> <!-- End Cuisines Container -->
    </div> <!-- End Featured Cuisines Section -->



   <div class="featured-testimonials">
                <div class="container">
                    <h2 class="text-center">Testimonials</h2>

                    <div class="testimonials text-center">
                        <div class="testimonial">
                            <a href="#"><img src="img/chefTestimonial.png" alt="Hotel Testimonial Image"></a>

                            <a href="#"><span class="testimonial-video">Video</span></a>
                            Alexa Brown | Peak Hotels
                        </div>


                        <div class="testimonial">
                            <a href="#"><img src="img/chefTestimonial.png" alt="Chef Testimonial Image"></a>

                            <a href="#"><span class="testimonial-video">Video</span></a>
                            Brian Mpishi| Chef
                        </div>


                       <div class="testimonial">
                            <a href="#"><img src="img/chefTestimonial.png" alt="Client Testimonial Image"></a>

                            <a href="#"><span class="testimonial-video">Video</span></a>
                            Paula Furaha | Happy Client
                        </div>



                        
                        <div class="testimonial">
                            <a href="#"><img src="img/chefTestimonial.png" alt="Chef Testimonial Image"></a>

                            <a href="#"><span class="testimonial-story">Story</span></a>
                            Chef Hodari | Chef
                        </div>
                        

                        <div class="testimonial">
                            <a href="#"><img src="img/chefTestimonial.png" alt="Client Testimonial Image"></a>

                            <a href="#"><span class="testimonial-story">Story</span></a>
                            Margaret Ndiwe | Happy Client 
                        </div>

                
                        <div class="testimonial">
                            <a href="#"><img src="img/chefTestimonial.png" alt="Hotel Testimonial Image"></a>

                            <a href="#"><span class="testimonial-story">Story</span></a>
                            Brian Leo | Heron Hotels 
                        </div>
                
            </div> <!-- End Testimonials -->

            <div class="text-center">
                <a href="#">More Testimonials...</a>
            </div>

        </div> <!-- End Testimonials Container -->
    </div> <!-- End Featured Testimonials Section -->


    <div class="blog-section">
        <div class="container">
            
            

            <div class="blog-posts">


                <div class="blog-post">
                    <a href="#"><h4 class="blog-title">About Us</h4></a>
                    <div class="blog-description">Worldwide, more than 75 million young people are unemployed.</div>
                    <a href="#">Our Blog</a>
                </div>

          
                <div class="blog-post">
                    <a href="#"><h4 class="blog-title">Contact Us</h4></a>
                    <p>020-0089994756</p>
                    <a href="#">info@chefstop.com</a>
                    <p>
                        Upishi Towers, <br>
                        Wapishi Road.<br>
                        Nairobi CBD | Kenya.
                    </p>
                </div>


                <div class="blog-post">
                    <h4 class="blog-title">We Are Social Too</h4>
                    <a href="#"><img src="img/fbIcon.png" alt="Facebook Logo"></a>

                    <a href="#"><img src="img/twitterIcon.png" alt="Twitter Logo"></a>

                    <a href="#"><img src="img/instagramIcon.jpg" alt="Instagram Logo"></a>
                </div>

            </div><!--  End of Blog Posts -->

        </div> <!-- End of Blog Container -->
    </div> <!-- End of Blog Section -->





    <footer>
        <div class="footer-content container">
                <p>&#169; 2019 Chef-Stop</p>

                
                    <a href="#">Privacy</a>
                    <a href="#">Terms</a>
                    <a href="#">Accessibility</a>
                
        </div>
    </footer>
    </body>
    <script
    src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</html>
