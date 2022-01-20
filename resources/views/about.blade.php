@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .jumbotron {
            background-color: #f4511e;
            color: #fff;
            padding: 100px 25px;
        }

        .container {
            padding: 60px 50px;
        }

        .bg-grey {
            background-color: #f6f6f6;
        }

        .logo {
            font-size: 200px;
        }

        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
        }
    </style>

</head>

<body>
    <div class="page-title text-center" style="padding: 100px; background-color: #fdc800;">
        <h1 style="margin: 0; font-weight: bold; font-size: 50px; ">
            About Us
        </h1>
    </div>



    <!-- Container (About Section) -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <h1 class="text-success">We believe in the best CUSTOMER EXPERIENCE</h1>
                <h3 class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non tellus at lacus feugiat tempus.
                    Fusce sit amet eleifend odio. Aliquam orci justo, pretium nec dolor in, luctus aliquet nunc.
                    Pellentesque pretium eros sed elit tempor, in dapibus elit rutrum. Morbi eu laoreet nibh. Nam
                    vestibulum accumsan ipsum imperdiet luctus. Quisque aliquam velit nunc, a placerat risus luctus et.
                    Donec id magna a turpis fringilla aliquet. Donec turpis massa, tristique nec felis ac, condimentum
                    euismod lectus. Phasellus luctus felis id nibh accumsan bibendum.
                </h3 class="text-justify">
                <button class="btn btn-success btn-lg">Get in Touch</button>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-signal logo text-success"></span>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-grey">
     <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-globe logo"></span>
            </div>
            <div class="col-sm-8">
                <h1 class="text-success">Our Values</h1>
                <h3><strong class="text-success">MISSION:</strong> <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non tellus at lacus feugiat tempus.
                    Fusce sit amet eleifend odio. Aliquam orci justo, pretium nec dolor in, luctus aliquet nunc.
                    Pellentesque pretium eros sed elit tempor, in dapibus elit rutrum. Morbi eu laoreet nibh. Nam
                    vestibulum accumsan ipsum imperdiet luctus. Quisque aliquam velit nunc, a placerat risus luctus et.
                    Donec id magna a turpis fringilla aliquet. Donec turpis massa, tristique nec felis ac, condimentum
                    euismod lectus. Phasellus luctus felis id nibh accumsan bibendum.
                </h3>
                <h3><strong class="text-success">VISION:</strong> 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non tellus at lacus feugiat tempus.
                    Fusce sit amet eleifend odio. Aliquam orci justo, pretium nec dolor in, luctus aliquet nunc.
                    Pellentesque pretium eros sed elit tempor, in dapibus elit rutrum. Morbi eu laoreet nibh. Nam
                    vestibulum accumsan ipsum imperdiet luctus. Quisque aliquam velit nunc, a placerat risus luctus et.
                    Donec id magna a turpis fringilla aliquet. Donec turpis massa, tristique nec felis ac, condimentum
                    euismod lectus. Phasellus luctus felis id nibh accumsan bibendum.
                </h3>
               
            </div>
            
        </div>
     </div>
    </div>

    <div class="container-fluid text-center">
        <h1 class="text-success">Our Services</h1>
        <h3>What we offer</h3>
        <br>
        <div class="row">
          <div class="col-sm-4">
            <span style="font-size: 50px;" class="text-warning glyphicon glyphicon-off"></span>
            <h4>POWER</h4>
            <h3>Lorem ipsum dolor sit amet..</h3>
          </div>
          <div class="col-sm-4">
            <span style="font-size: 50px;" class="text-warning glyphicon glyphicon-heart"></span>
            <h4>LOVE</h4>
            <h3>Lorem ipsum dolor sit amet..</h3>
          </div>
          <div class="col-sm-4">
            <span style="font-size: 50px;" class="text-warning glyphicon glyphicon-lock"></span>
            <h4>JOB DONE</h4>
            <h3>Lorem ipsum dolor sit amet..</h3>
          </div>
        </div>
        <br><br>
        <div class="row">
          <div class="col-sm-4">
            <span style="font-size: 50px;" class="text-warning glyphicon glyphicon-leaf"></span>
            <h4>GREEN</h4>
            <h3>Lorem ipsum dolor sit amet..</h3>
          </div>
          <div class="col-sm-4">
            <span style="font-size: 50px;" class="text-warning glyphicon glyphicon-certificate"></span>
            <h4>CERTIFIED</h4>
            <h3>Lorem ipsum dolor sit amet..</h3>
          </div>
          <div class="col-sm-4">
            <span style="font-size: 50px;" class="text-warning glyphicon glyphicon-wrench"></span>
            <h4 style="color:#303030;">HARD WORK</h4>
            <h3>Lorem ipsum dolor sit amet..</h3>
          </div>
        </div>
      </div>
      

</body>

</html>
@endsection