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
                                <input name="adress" type="text" id="adress" placeholder="Adresse" required>
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="surface" type="text" id="surface"  placeholder="surface" required>
                            </fieldset>
                            </div>
                            
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                             <input name="prix" type="text" id="prix" placeholder="Prix" required>
                              </fieldset>
                            </div>
                          
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                             <input name="categorie" type="text" id="categorie" placeholder="Catégorie" required>
                              </fieldset>
                            </div>

                             <div class="col-lg-12">
                              <fieldset>
                                <textarea name="description" rows="6" id="description" placeholder="Description" required></textarea>
                              </fieldset>
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