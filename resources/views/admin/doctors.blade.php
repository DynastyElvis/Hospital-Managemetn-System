 
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
        .table-header {
            padding: 10px; /* Adjust the padding value as needed */
        }
    </style>
</head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
        <!-- partial -->
    
        <div class="container-fluid page-body-wrapper">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
            @endif
            <div align="center">
                <table >
                    <tr align="center">
                        <th class="table-header">Doctors's name</th>
                        <th class="table-header">phone</th>
                        <th class="table-header">speciality</th>
                        <th class="table-header">room</th>
                        <th class="table-header">image</th>
                        <th class="table-header">delete</th>
                        <th class="table-header">update</th>

                    </tr>

                    @foreach ($data as $doctor)
                    <tr align="center">
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone }}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room}}</td>
                        <td>
                            <img height="60" width="80" src="doctorimage/{{$doctor->image}}" alt="">
                        </td>
                        <td>
                            <a onclick="return confirm('are you sure you want to delete this doctor from the system?')" href="{{url('delete_doctor', $doctor->id)}}" class="btn btn-danger">delete</a>
                        </td>
                        <td>
                            <a href="{{url('update_doctor', $doctor->id)}}" class="btn btn-primary">edit</a>
                        </td>
                    </tr>
                    @endforeach 
                </table>
            </div>
        </div>
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
<!-- End custom js for this page -->
  </body>
</html> 