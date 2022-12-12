@include('ui.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     
    <title>News</title>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><h2></h2></center>
     
          <div class="container col-10">
                <small><p>{{$data -> date}}</p></small>
                <center>
                    <h2 class="display-3">{!! $data -> name !!}</h2>
                    <p style="color: black;">{!! $data->notice !!}</p>
                </center>                 
                <hr class="my-4">
                <br>
                <br>
          </div>
          @include('ui.footer')
</body>
</html>
