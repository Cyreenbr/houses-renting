<!DOCTYPE html>
<html lang="en">
  <head>
          <base href="/public">
          @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
  <div class="container-scroller">
       @include("admin.sidebar")
          <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      
      @include("admin.navbar")

       <div style="margin-left:300px;margin-top:100px;">
       <form action="{{url('/update',$data->id)}}" method="POST"  enctype="multipart/form-data">
         @csrf
        <div class="form-group">
           <label>Description</label>
           <input class="form-control" style="color:black;" type="text" name="description" value="{{$data->description}}" required>
        </div class="form-group">
          <div class="form-group">
           <label>Catégorie</label>
           <input class="form-control" style="color:black;" type="text" name="categorie" value="{{$data->categorie}}" required>
        </div>
         <div class="form-group">
           <label class="form-group">Adress</label>
           <input class="form-control" style="color:black;" type="text" name="adress" value="{{$data->adresse}}" required>
        </div>
         <div class="form-group">
           <label>Surface</label>
           <input class="form-control" style="color:black;" type="text" name="surface" value="{{$data->surface}}" required>
        </div>
         <div class="form-group">
           <label>Prix</label>
           <input  class="form-control" style="color:black;" type="text" name="prix" value="{{$data->prix}}" required>
        </div>
        <div class="form-group">
           <label>Image ancienne</label>
           <img height="200" width="200" src="/houseimage/{{$data->image}}">
        </div>
        <div class="form-group">
           <label>Nouvelle image</label>
           <input  class="form-control" type="file" name="image" required>
        </div>

        <div>
          <input class="btn btn-primary " type="submit" style="width:300px;height:40px" value="Save">
        </div>

       </form>
      </div>


       @include("admin.adminscript")
  </div > 
  </div>
  </body>
</html>