 
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
    <div class="container-fluid page-body-wrapper">
        <div align="center">
            <table >
                <tr align="center">
                    <th class="table-header">Patient's name</th>
                    <th class="table-header">email</th>
                    <th class="table-header">phone</th>
                    <th class="table-header">doctor's name</th>
                    <th class="table-header">date</th>
                    <th class="table-header">message</th>
                    <th class="table-header">status</th>
                    <th class="table-header">approve</th>
                    <th class="table-header">cancel</th>
                </tr>
                @foreach ($data as $appoint)
                <tr align="center">
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td>
                        <a class="btn btn-success" href="{{url('approved', $appoint->id)}}">approved</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{url('cancelled', $appoint->id)}}">cancelled</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
        <!-- partial -->
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
<!-- End custom js for this page -->
  </body>
</html> 