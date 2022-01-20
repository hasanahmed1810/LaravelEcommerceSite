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
          Testimonials
        </h1>
    </div>

    <div class="container text-center">
        <h1 class="text-success">What our customers say</h1>
    </div>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
      <!-- Indicators -->
      <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol> -->
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
        </div>
        <div class="item">
          <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
        </div>
        <div class="item">
          <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
        </div>
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</body>

</html>
@endsection