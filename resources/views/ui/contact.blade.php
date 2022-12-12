@include('ui.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
    <center><h2>Contact</h2></center>
    <div id="tf-contact" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title center">
                        <h2 class="col-1" style="font-size: 20px;" ><strong>Feel free to <b> </b> contact us</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em>American International University Bangladesh <br> 408/1, Kuratoli, Khilkhet, Dhaka 1229, Bangladesh</em></small>            
                    </div>
                    <form action="{{url('email')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" required class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Subject</label>
                                    <input type="text" name="subject" required class="form-control" id="exampleInputPassword1" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                            <textarea class="form-control" name="message" required rows="3"></textarea>
                        </div>
                        
                        <button type="submit" class="btn tf-btn btn-default">Submit</button>
                    </form>
                    @if(session()->has('Success'))
                        <script>
                            swal("{{session()->get('Success')}}", "You clicked the button!", "success");
                        </script>
                    @endif

                </div>
            </div>

        </div>
    </div>

    <!--Sweet alart-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
</body>
</html>
@include('ui.footer')