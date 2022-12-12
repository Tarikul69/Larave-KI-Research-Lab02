@include('ui.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
</head>
<body>
<!-- Team Page
    ==========================================-->
    <br>
    <br>
    <br>
    <br>
    <div style="color: white;" id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2><strong>KI Research Lab Members</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
             
                <div  class="">
                @foreach($data as $k)
                    @if($k -> role == '0')
                        <div class="container row">
                            <div class="item col-md-3">
                                <div class="">
                                    <a style="pointer-events: none; text-decoration: none; color: white;" href="{{url('edit/'.$k->id)}}"> 
                                         <div class="caption">
                                            <p><img style="height: 80px; width: 120px; border-radius: 10px" src="{{asset($k -> photo)}}" alt=""></p>
                                            <h3>{{$k -> name}}</h3>
                                            <p>{{$k -> role_type}}</p> 
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-10">
                                <p>{{$k -> bio}}</p>
                            </div>
                        </div>
                    <hr>
                    @endif
                @endforeach
                     
 
                </div>
                
            </div>
        </div>
    </div>
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
                @if($abcd -> role == '1')
                <div class="container col-md-3  ">
                    <div style="background-color: gray;" class="card" style="width: 18rem;">
                    <br>
                        <img style="hight: 100px; width: 150px;" class="card-img-top" src="{{asset($abcd -> photo)}}" alt="Card image cap">
                         <div class="card-body">
                            <h5 style="color: white;" class="card-title">{{$abcd -> name}}</h5>
                            <a href="#" class="">Research Assistant</a>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                    
            </div>
       </div>
    </div>
    <br>
</body>
</html>
@include('ui.footer')