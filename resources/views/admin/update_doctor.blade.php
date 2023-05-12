 
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
            {{$data->name}}
            {{$data->phone}}
            {{$data->room}}
        </div>
    </div>
    @include('admin.script')
  </body>
</html> 