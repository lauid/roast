<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function __construct()
    {
//        echo __METHOD__;
    }

    public function getApp()
    {
        User::find( 100 );
        return view('app');
    }

    public function getLogin()
    {
        return view('login');
    }

    public function getHome()
    {
        echo __METHOD__;
    }

}
