 
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
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
                <tr>
                    <th>Patient's name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>doctor's name</th>
                    <th>date</th>
                    <th>message</th>
                    <th>status</th>
                </tr>
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