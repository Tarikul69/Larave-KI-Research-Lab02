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
    <title>Document</title>
</head>
<body class="">
    <div class="container" style="background-color: gray; border-radius: 9px;">
    <div>
        <br>
        <div class="container row">
            <div class="col-md-10">
            <center><h2><strong>Team</strong></h2></center>
            </div>
            <div class="col-md-2">
                <a href="addteam" class="btn btn-primary" style="text-decoration: none;">Add a Member</a>
            </div>
        </div>
         <div class="container col-md-6">
            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Short Bio:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <br>
                <input class="btn btn-primary" type="submit" value="Add">
                <br>
            </div> -->
        </div>
    </div>
    <!--Table-->
    <div class="container">
        <div class="container col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Name</th>
                        <th scope="col">Rank</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $abc)
                
                    <tr>
                        <th scope="row"></th>
                        <td>{{$abc -> name}}</td>
                        <td>{{$abc -> role_type}}</td>
                        <td><img style="height: 50px; width: 80px; border-radius: 10px" src="{{asset($abc -> photo)}}" alt=""></td>
                        <td>
                            @if($abc -> role == '0')
                            <a href="{{url('changestatus/'.$abc->id)}}" class="btn btn-sm btn-primary">Active </a>
                            @else
                            <a href="{{url('changestatus/'.$abc->id)}}" class="btn btn-sm btn-danger">InActive</a>
                            @endif
                        </td>
                        <td><a class="btn btn-sm btn-secondary" href="">Edit</a></td>
                        <td><a class="btn btn-sm btn-danger" href="{{url('teamDelete/'.$abc->id)}}">Delete</a></td>
                        
                        <br>
                    </tr>   
                @endforeach   
                @if(session()->has('message'))
                    <script>
                        swal("{{session()->get('Success')}}", "You clicked the button!", "success");
                    </script>
                @endif              
                </tbody>
            </table>

             
        </div>
    </div>
    <br>
    <br>

    <center><h3><strong>Alumni</strong></h3></center>
    <div style="color: grey;" id="tf-team" class="col text-center">
       <div>
                <div class="section-title center">
                    <h2><strong>Alumni</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
       </div>
       <div class="container">
        <div class="container row">
        @foreach($data as $abcd)
            @if($abcd-> role == '1')
                 
                    <div class="container col-md-3  ">
                        <div style="background-color: gray;" class="card" style="width: 18rem;">
                        <br>
                        <center>
                        <img style="height: 80px; width: 120px; border-radius: 10px" src="{{asset($abcd -> photo)}}" alt="">
 
                        </center>
                            <div class="card-body">
                                <h5 style="color: white;" class="card-title">{{$abcd -> name}}</h5>
                                <a href="#" style="text-decoration: none; color: white;" class="">{{$abcd -> role_type}}</a>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div> 
                 
            @endif
            @endforeach  
            @if(session()->has('Success'))
                    <script>
                        swal("{{session()->get('Success')}}", "You clicked the button!", "success");
                    </script>
                    @endif
            </div>
       </div>
    <br>
    </div>
    <!--Sweet alart-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>
