@extends('layouts/guest')
@section('title','Sign In')
@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="login" method="post">
            <h3 class="form-title">Login to your account</h3>
            <div class="alert alert-danger hide">
                <button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Email</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" value="{{ Input::old('email') }}"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="input-icon">
                    <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
                </div>
            </div>
            <div class="form-actions">
                <label class="checkbox">
                    <input type="checkbox" name="remember" value="1"/> Remember me </label>
                <button type="submit" class="btn btn-primary btn-lg pull-right">
                    Login <i class="m-icon-swapright m-icon-white"></i>
                </button>
            </div>

            <div class="forget-password">
                <h4>Forgot your password?</h4> <a href="/reset"> <H5>Click Here</H5></a>

            </div>

        </form>
        <!-- END LOGIN FORM -->
    </div>
    <div class="col-md-3"></div>
</div>

@stop