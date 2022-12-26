<!DOCTYPE html>
<html lang="en">
  <head>
          @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
       @include("admin.sidebar")
        <!-- partial -->
       @include("admin.navbar")
        <div style="padding: 100px">
            <table class="table table-success table-striped " style="width:900px;">

                <thead align=center>
                   <th >Name</th>
                   <th >Email</th>
                   <th >Action</th>
                </thead>

                @foreach ($data as $data)
                <tr align=center >
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                @if($data->usertype=="0")
                <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>  
                @else
                <td><a >Not allowed</a></td>  
                @endif
                </tr>     
                @endforeach
            </table>
        </div>
      
       @include("admin.adminscript")
    </div > 
  </body>
</html>