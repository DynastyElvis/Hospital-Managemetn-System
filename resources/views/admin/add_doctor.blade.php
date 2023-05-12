 
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
    </style>
</head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
    <body>
        <div class="container-fluid page-body-wrapper">
             <div class="container"  >
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name">Doctor's Name</label>
                        <input type="text" name="name" placeholder="Write the name" style="color: black">
                    </div>
                        <div>
                            <label for="number">Doctor's Contacts</label>
                            <input type="text" name="number" placeholder="Write the contacts" style="color: black">
                        </div>

                        <div>
                            <label for="">Image</label>
                            <input type="file" name="file" placeholder="Upload Image">
                        </div>

                        <div>
                            <label for="speciality">Speciality</label>
                            <select name="speciality" style="color: black">
                                <option>--Select--</option>
                                <option value="skin">Skin</option>
                                <option value="heart">Heart</option>
                                <option value="eye">Eye</option>
                                <option value="nose">Nose</option>
                            </select>
                        </div>

                        <div>
                            <label for="name">Room Number</label>
                            <input type="text" name="room" placeholder="Write the Room" style="color: black">
                        </div>

                        <div>
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                        
                </form>
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