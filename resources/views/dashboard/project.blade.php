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
<body style="background-color: gray;">
    <div class="container" style="background-color: #C0C0C0; border-radius: 9px;">
            <div>
                <br>
                <center><h2>Project</h2></center>
                <div class="container col-md-6">
                    <form action="{{url('project10')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Project Title:</label>
                            <input type="text" class="form-control" name="name" required id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Detailse:</label>
                            <textarea class="form-control" name="notice" required id="summernote" rows="3"></textarea>
                            <br>
                            <input class="btn btn-info" type="submit" value="Add">
                        </div>
                        @if(session()->has('Success'))
                        <script>
                            swal("{{session()->get('Success')}}", "You clicked the button!", "success");
                        </script>
                        @endif
                    </form>
                </div>
            </div>
            <!-- Table-->
            <div class="container">
                <div class="container col-md-10">
                    <table class="table">
                        <thead>
                            <tr style="background-color: #E6E6FA; border-radius: 20px;">
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach($data as $aa)
                            <th scope="row">{!!$aa -> id !!}</th>
                            <td>{!! $aa -> name !!}</td>
                            <td>{!! $aa -> date !!}</td>
                            <td></td>
                            <td><a href="{{url('editproject/'.$aa->id)}}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{url('deleteproject/'.$aa->id)}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endforeach
                           <br>
                           @if(session()->has('message'))
                                <script>
                                    swal("{{session()->get('message')}}", "You clicked the button!", "message");
                                </script>
                         @endif

                        @if(session('Fail'))
                                <script>
                                    swal("News added successfuly!", "You clicked the button!", "success");
                                </script>
                        @endif
                        </tbody>
                    </table>
                    <div class="container col-6">
                <!--Page Ination-->
                <nav aria-label="Page navigation example">
                        <ul class="pagination">
                        {{$data ->links()}}
                        </ul>
                </nav>
            </div>
                </div>
            </div>
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