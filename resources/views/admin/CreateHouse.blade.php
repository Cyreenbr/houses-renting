<!DOCTYPE html>
<html lang="en">
  <head>
          @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller" >
       @include("admin.sidebar")
          <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      
        <!-- partial:partials/_navbar.html -->
      @include("admin.navbar")
        <!--end navbar-->
<div  style="margin-left:300px;margin-top:100px;">
 <form action="{{url('/uploadhouse')}}" method="POST"  enctype="multipart/form-data">
         @csrf
        <div class="form-group">
           <label>Description</label>
           <input class="form-control" style="color:blue;" type="text" name="description" required>
        </div>
          <div class="form-group">
           <label>Catégorie</label>
           <input class="form-control" style="color:blue;" type="" name="categorie" required>
        </div>
         <div class="form-group">
           <label>Adress</label>
           <input class="form-control" style="color:blue;" type="text" name="adress" required>
        </div>
         <div class="form-group">
           <label>Surface</label>
           <input class="form-control" style="color:blue;" type="text" name="surface" required>
        </div>
         <div class="form-group">
           <label>Prix</label>
           <input  class="form-control" style="color:blue;" type="text" name="prix" required>
        </div>
         <div class="form-group">
           <label for="image_input">Image</label>
           <input type="file" class="form-control" id="image_input"  name="image" required>
        </div>

        <div>
          <input class="btn btn-primary " type="submit" style="width:300px;height:40px" value="Save" >
        </div>

       </form>
</div>
 </div > 
 @include("admin.adminscript")
</div>
  </body>
</html>