  <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>les biens immobiliers disponibles</h6>
                        <h2>notre selection des biens immobiliers</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">

                @foreach ($data as $data)
                    
                    <div class="item">
                        <div style="background-image: url('/houseimage/{{$data->image}}')" class='card'>
                            <div class="prix"><h6>{{$data->prix}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$data->categorie}}</h1>
                              <p class='description'>{{$data->description}}</p>
                              <div class="main-text-button">
                                 <a href="#reservation">Intéressé</a>
                              </div>
                            </div>
                        </div>
                    </div>

                @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->