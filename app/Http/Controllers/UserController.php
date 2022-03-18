<?php

namespace App\Http\Controllers;

use App\Models\loan;
use App\Models\loanApplyCompany;
use App\Models\loanDocument;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {

        return view('dashboard.user.index');
    }
    public function upload()
    {

        $i=$j=1;
        $equity=loan::where('user_id',\Auth::user()->id)->where('type','Home equity')->with('equity')->first();
        $estate=loan::where('user_id',\Auth::user()->id)->where('type','Real estate financing')->with('estate')->first();


        return view('dashboard.user.upload',compact('equity','estate','i','j'));
    }
    public function uploadLoan(Request $request)
    {
        $loan=loan::firstOrCreate(
            ['user_id'=> \Auth::user()->id, 'type'=>$request->type],

        );

        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $file->getClientOriginalName();
            $file->move('assets/dashboard/document/', $filename);

            $documet=new loanDocument();
            $documet->loan_id=$loan->id;
            $documet->file=$filename;
            $documet->save();

        }
        return back()->with('success','Document uploaded successfully');


    }

    public function loanDocument($id)
    {

        $loanadd=loanApplyCompany::with('document')->find($id);

        return view('dashboard.common.loanDocument', compact('loanadd'));
    }
    public function status()
    {

$equity=loanApplyCompany::where('user_id',\Auth::user()->id)->where('category','Home equity')->get();
$estate=loanApplyCompany::where('user_id',\Auth::user()->id)->where('category','Real estate financing')->get();

        return view('dashboard.user.status',compact('estate','equity'));
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
