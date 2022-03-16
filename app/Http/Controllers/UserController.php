<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $user=User::find(\Auth::user()->id);
        return view('dashboard.user.myprofile',compact('user'));
    }

    public function refrel()
    {

$url=\request()->root().'/register?id='.\Auth::id();
$refrel=User::where('refrel_id',\Auth::user()->id)->get();


        return view('dashboard.user.refrel',compact('url','refrel'));
    }

    public function history()
    {
        return view('dashboard.user.history');
    }
}
