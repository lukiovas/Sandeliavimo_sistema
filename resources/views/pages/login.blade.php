@extends('layouts.pageLayout')

<?php $logged = false ?>
@section('content')
    <div class="login-form">
        <form action="" method="post">
            <h2 class="text-center">Sign Up</h2>       
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" name="login" class="btn btn-primary btn-block">Log In</button>
            </div>
            <div class="clearfix">
            </div>        
        </form>
    </div>
@endsection       