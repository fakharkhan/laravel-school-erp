<?php

/**
 * Created by PhpStorm.
 * User: fakhar
 * Date: 13/08/2014
 * Time: 4:21 PM
 */



class AuthController extends BaseController
{
    public function login()
    {
        // Use the login url on a link or button to redirect to Facebook for authentication
        return View::make('guest.login');
    }


    public function doLogin()
    {
        $user = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        if (Auth::attempt($user)) {
               return Redirect::route('home');
        }

        return Redirect::back()
            ->withFlashMessage(Lang::get('user.auth.invalid'))
            ->withCssClass('danger');

    }


    public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }


} 