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
  
     @include("formulaire")


     <!-- ***** Footer Start ***** -->
    <!-- ***** Footer End ***** -->

     @include("homescript")
  </body>
</html>