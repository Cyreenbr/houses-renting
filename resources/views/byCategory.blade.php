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
   <div class="container" >
   <div class="row mb-2">
     @foreach ($data as $data)
     @if ($data->categorie == 'maison')      
       <div class="card mb-3" style="max-width: 540px; margin-top:100px">
           <div class="row g-0">
             <div class="col-md-4">
               <img src="/houseimage/{{$data->image}}" class="img-fluid rounded-start" alt="...">
             </div>
             <div class="col-md-8">
                 <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                 </div>
              </div>
           </div>
       </div>
       @endif
     @endforeach
   </div>
  </div>

     <!-- ***** Footer Start ***** -->
    <!-- ***** Footer End ***** -->

     @include("homescript")
  </body>
</html>