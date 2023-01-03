<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">
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
       
                 @include("navbar")

      
    </header>
    <!-- *** Header Area End *** -->
  
     @include("interesseForm")


     <!-- ***** Footer Start ***** -->
    <!-- ***** Footer End ***** -->

     @include("homescript")
  </body>
</html>