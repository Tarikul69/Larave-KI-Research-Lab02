@include('dashboard.principalinvastigator.abc')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- include libraries(jQuery, bootstrap) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<title>Document</title>
</head>
<body class="">
    <div class="container" style="background-color: gray; border-radius: 9px;">
        <div>
            <br>
            <center><h2>Edit Publication</h2></center>
            <div class="container col-md-6">
                <form action="{{url('updatepublication/'.$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf 
                    @method('post')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">News Title:</label>
                        <input type="text" name="name" id="" value="{{$data -> name}}" class="form-control" id="exampleFormControlInput1" required >
                        </div>
                        <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Details:</label>
                        <textarea class="form-control" id="summernote" name="notice" value="{{$data->notice}}" id="exampleFormControlTextarea1" rows="3" required >{{$data->notice}}</textarea>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                    @if(session()->has('Success'))
                    <script>
                        swal("{{session()->get('Success')}}", "You clicked the button!", "success");
                    </script>
                    @endif
                </form>
                <br>
                <br>
            </div>
        </div>
        <!--Table-->
    </div>
    <!--Sweet alart-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 100
        });
    </script>
</body>
</html>
 