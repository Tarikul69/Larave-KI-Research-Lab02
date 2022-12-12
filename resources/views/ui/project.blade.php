@include('ui.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
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
    <center><h2>Project</h2></center>
    @foreach($data as $ab)
    <a style="color: black;" href="{{url('projectdetails/'.$ab->id)}}">
          <div class="container col-10">
                <p>{!! $ab-> name !!}</p>
                <h5 class="display-3">{!! $ab -> notice !!}</h5>
                <a href="{{url('news11/'.$ab->id)}}" >Read more....</a>
 <!--                 <b><a href="text"><p>{!! $ab -> notice !!}</p></a></b>-->

<!--                 <img style="position: absolute; right: 10px; width: 150px;" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg">-->                <br> 
                <hr class="my-4">
                <br>
                <br>
          </div>
    </a>
    @endforeach
            <div class="container col-6">
                <!--Page Ination-->
                <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {{$data ->links()}}
                             

                        </ul>
                </nav>
            </div>
</body>
</html>
@include('ui.footer')