<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
<style>
    .login-box {
        padding: 20px;
        border: 1px solid #337ab7; 
        border-radius: 5px;
    }
    .register-box {
        padding: 20px;
        border: 1px solid #4cae4c; 
        border-radius: 5px;
    }
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important
    }
    .custom-product{
        height: 600px
    }
    .trending-image{
        height: 100px;
    }
    .trening-item{
        float: left;
        width: 24.5%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width:410px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    #search {
        outline: none;
    }
     @media(max-width: 1020px){
        .trening-item{
            width: 97%;
        }
        .carosel-text-med{
            display: none;
        }
        .carosel-text2-med{
            color: #fdc800 !important;
            font-size: 30px;
        }
    }
    @media(max-width: 1210px){
        .search-box{
            width: 200px !important
        }
    }
    @media(max-width: 1000px){
        .search-box{
            width: 70px !important
        }
    }
    @media(max-width: 900px){
        #search{
            display: none;
        }
    }
    @media(max-width: 700px){
        #search{
            display: block;
            width: 430px;
        }
        .search-box{
            width: 430px !important
        }
        .slider-text{
            background-color: #35443585 !important;
            border-radius: 10px;
        }
    }
</style>
</html>