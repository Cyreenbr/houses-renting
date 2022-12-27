<!DOCTYPE html>
<html lang="en">
  <head>
          @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
       @include("admin.sidebar")
          <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      
        <!-- partial:partials/_navbar.html -->
      @include("admin.navbar")
        <!--end navbar-->

      <div style="margin-left:80px;margin-top:100px">
            <table class="table table-success table-striped " style="width:900px;">
                <tr align="center">
                   <th>Description</th>
                   <th>Catégorie</th>
                   <th>Adresse</th>
                   <th>Surface</th>
                   <th>Prix</th>
                   <th>Image</th>
                   <th>Action</th>
                   <th>Action2</th>
                </tr>

                @foreach ($data as $data)
                <tr align="center">
                <td>{{$data->description}}</td>
                <td>{{$data->categorie}}</td>
                <td>{{$data->adresse}}</td>
                <td>{{$data->surface}}</td>
                <td>{{$data->prix}}</td>
                <td><img src="/houseimage/{{$data->image}}"></td>
                <td><a href="{{url('/deletehouse',$data->id)}}">Delete</a></td>  
                <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
                </tr>     
                @endforeach
                
            </table>
        </div>


      
  </div > 
 @include("admin.adminscript")
  </body>
</html>