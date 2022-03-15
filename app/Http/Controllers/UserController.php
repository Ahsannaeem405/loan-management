<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {

        return view('dashboard.user.index');
    }
    public function upload()
    {

        return view('dashboard.user.upload');
    }
    public function status()
    {

        return view('dashboard.user.status');
    }

    public function report()
    {
        return view('dashboard.user.report');
    }
    public function myprofile()
    {
        return view('dashboard.user.myprofile');
    }

    public function refrel()
    {
        return view('dashboard.user.refrel');
    }

    public function history()
    {
        return view('dashboard.user.history');
    }
}
