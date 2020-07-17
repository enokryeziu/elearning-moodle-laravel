<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Cloud e-Learning</title>
        <link href="{{ asset('css/app.css') }}?<?php echo time(); ?>" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}?<?php echo time(); ?>">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @yield('content')
            <br>
            <footer class="fooStyle">
                <div class="row">
                    <div class="col-md-5">
                        <h4>Contacts details</h4>
                        <p>+381 38 541 400<br>
                        info@ubt-uni.net <br>
                        Kalabria,Prishtine</p>
                        <p><b>Sign up for our Newsletter</b></p>
                        <form action="">
                            <input type="email" placeholder="Email Address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <h4>Contact Form</h4>
                        <form action="">
                           <input type="text" placeholder="Name" class="form-control"><br>
                            <input type="email" placeholder="Email Address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
                            <input type="text" placeholder="Message" class="form-control"><br>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-2" style="text-align:right">
                        <img src="{{asset("images/ubtlogo.png")}}" alt="First slide" style="width:100px;"> <br><br>
                        <p><b>Opening Timings</b></p>
                        <p style="font-size:.8em;">Mon-Fri 9:00 am - 5:00 pm <br>
                        Sat 9:00 am - 4:00 pm <br>
                        Sun 9:00 am - 1:00 pm</p>
                        <a href="#"><img src="{{asset("images/fb.png")}}" alt="" style="width:20px;"></a>
                        <a href="#"><img src="{{asset("images/tw.png")}}" alt="" style="width:20px;"></a>
                        <a href="#"><img src="{{asset("images/g+.png")}}" alt="" style="width:20px;"></a>
                        <a href="#"><img src="{{asset("images/linkedin.png")}}" alt="" style="width:20px;"></a>
                    </div>
                </div>
            </footer><br>
            <p style="text-align:center">Cloud eLearning is a trademark of UBT.  <br>Copyright © 2011-2019 UBT. All rights reserved.</p>
        </div>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>    
    </body>
</html>
