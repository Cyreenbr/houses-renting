 <section class="section" id="reservation">
        <div class="container" >
 
                <div class="col-lg-6">
                    <div class="contact-form">
                          <div class="row">
                           
                             <form id="contact" action="{{url('/uploadinteresse')}}" method="POST"  enctype="multipart/form-data">
                              @csrf
                               <div class="col-lg-12">
                                <h4>Interessé</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="house_id" type="text" id="house_id" value="{{$id}}" >
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="nom" type="text" id="nom"  placeholder="Nom" required>
                            </fieldset>
                            </div>
                            
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                             <input name="prenom" type="text" id="prenom" placeholder="Prenom" required>
                              </fieldset>
                            </div>
                          
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                             <input name="numero" type="text" id="numero" placeholder="Numéro de Tel" required>
                              </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="yyyy-mm-dd">
                                    <input  name="date_debut" id="date" type="date" class="form-control" placeholder="Date début">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>

                            <div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="yyyy-mm-dd">
                                    <input  name="date_fin" id="date" type="date" class="form-control" placeholder="Date fin">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>

                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon" value="Save">Ajouter</button>
                              </fieldset>
                            </div>
                            </form>
                          </div>
                    </div>
                </div>
           
        </div>
    </section>