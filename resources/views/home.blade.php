<!DOCTYPE html>
<html lang="en">

  <head>
     @include("head")
  </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
  
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                 
                 @include("navbar")

                </div>
            </div>
        </div>
    </header>
    <!-- *** Header Area End *** -->
   

    <!-- ***** Main Banner Area Start ***** -->
   <!-- *** Main Banner Area Start *** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Rent House</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">LogIn</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/bghouse.png" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/bghouse3.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/studio1.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** Main Banner Area End *** -->
    <!-- ***** Main Banner Area End ***** -->
 
   

    <!-- ***** About Area Starts ***** -->

    <section class="section" id="about" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6 >About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>Klassy Cafe is one of the best <a href="https://templatemo.com/tag/restaurant" target="_blank" rel="sponsored">restaurant HTML templates</a> with Bootstrap v4.5.2 CSS framework. You can download and feel free to use this website template layout for your restaurant business. You are allowed to use this template for commercial purposes. <br><br>You are NOT allowed to redistribute the template ZIP file on any template donwnload website. Please contact us for more information.</p>
                        
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

       @include("house")

    <!-- ***** Categories Area Starts ***** -->
       @include("categoryCard")
    <!-- ***** Categories Area Ends ***** -->

    <!-- *****  Form Area Starts ***** -->
       @include("formulaire")
    <!-- ***** Form Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
      @include("footer")
    <!-- ***** Footer End ***** -->

     @include("homescript")
  </body>
</html>