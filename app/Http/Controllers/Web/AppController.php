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
