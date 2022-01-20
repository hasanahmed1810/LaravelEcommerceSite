@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 login-box">
            <form action="login" method="POST" >
                <div class="form-group">
                    @csrf
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" style="border: 2px solid #337ab7">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="border:2px solid #337ab7">
                </div>
                <button style="width: 100%; outline: none;" type="submit" class="btn btn-primary">Login</button>
            </form>
            <a style="width: 100%; margin-top:15px" href="/admin" type="submit" class="btn btn-primary">Login as Admin</a>
        </div>
    </div>
</div>
@endsection