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
     @if ($data->categorie == "apartement")      
        <div class="card mb-3" style="widht:100px;margin-top:20px" >
    <img src="/houseimage/{{$data->image}}"  class="card-img-top" alt="..." style="height:250px">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text" >{{$data->description}}</p>
    <p class="card-text" >{{$data->adresse}}</p>
   <p class="card-text" >{{$data->surface}}</p>
       <p class="card-text" >{{$data->prix}}</p>
    <p class="card-text"><small class="text-muted">{{$data->updated_at}}</small></p>

        <button><span class="bi bi-star"></span>Intéressé</button>

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