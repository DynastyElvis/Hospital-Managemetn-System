 
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
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('editDoctor', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px">
                        <label for="">doctor's name</label>
                        <input style="color: black" type="text" name="name" value="{{$data->name}}">
                    </div>
                    <div style="padding: 15px">
                        <label for="">doctor's phone</label>
                        <input style="color: black" type="number" name="phone" value="{{$data->phone}}">
                    </div>
                    <div style="padding: 15px">
                        <label for="">doctor's speciality</label>
                        <input style="color: black"type="text" name="speciality" value="{{$data->speciality}}">
                    </div>
                    <div style="padding: 15px">
                        <label for="">doctor's room</label>
                        <input style="color: black"type="text" name="room" value="{{$data->room}}">
                    </div>
                    <div style="padding: 15px">
                        <label for="">doctor's old image</label>
                        <img height="60" width="80" src="doctorimage/{{$data->image}}" alt="">  
                    </div>
                    <div style="padding: 15px">
                        <label for="">change image</label>
                    <input name="file" type="file"> 
                    </div>
                    <div>
                        <input type="submit" class="btn btn-success" value="update">
                    </div>

                </form>

            </div>
        </div>
    </div>
    @include('admin.script')
  </body>
</html> 