<!DOCTYPE html>
<html lang="en">
  <head>
          @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
       @include("admin.navbar")
        <!-- partial -->

        <div style="padding: 100px">
            <table>

                <tr>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Action</th>
                </tr>

                @foreach ($data as $data)
                <tr>
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