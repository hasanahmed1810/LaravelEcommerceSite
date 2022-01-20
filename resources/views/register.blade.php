@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 register-box">
            <form action="register" method="POST">
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" style="border: 2px solid #5cb85c">
                </div>
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" style="border: 2px solid #5cb85c">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="border:2px solid #5cb85c">
                </div>
                <button style="width: 100%; outline: none;" type="submit" class="btn btn-success">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection