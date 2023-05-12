 
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')
</head>
  <body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <form action="">
                    <div style="padding: 15px">
                        <label for="">doctor's name</label>
                        <input style="color: black" type="text" name="name" value="{{$data->name}}">
                    </div>
                    <div style="padding: 15px">
                        <label for="">doctor's phone</label>
                        <input style="color: black" type="number" name="name" value="{{$data->phone}}">
                    </div>
                    <div style="padding: 15px">
                        <label for="">doctor's speciality</label>
                        <input style="color: black"type="text" name="name" value="{{$data->speciality}}">
                    </div>
                    <div style="padding: 15px">
                        <label for="">doctor's room</label>
                        <input style="color: black"type="text" name="name" value="{{$data->room}}">
                    </div>
                </form>

            </div>
        </div>
    </div>
    @include('admin.script')
  </body>
</html> 