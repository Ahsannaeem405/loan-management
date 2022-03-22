<?php

namespace App\Http\Controllers;

use App\Events\notification;
use App\Events\sendMessage;
use App\Models\banner;
use App\Models\companies;
use App\Models\loan;
use App\Models\loanApplyCompany;
use App\Models\loanDocument;
use App\Models\report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $banner=banner::first();

        return view('dashboard.user.index',compact('banner'));
    }

    public function upload()
    {

        $i = $j = 1;
        $equity = loan::where('user_id', \Auth::user()->id)->where('type', 'Home equity')->with('equity')->first();
        $estate = loan::where('user_id', \Auth::user()->id)->where('type', 'Real estate financing')->with('estate')->first();


        return view('dashboard.user.upload', compact('equity', 'estate', 'i', 'j'));
    }

    public function uploadLoan(Request $request)
    {

        $loan = loan::firstOrCreate(
            ['user_id' => \Auth::user()->id, 'type' => $request->type],

        );

        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $file->getClientOriginalName();
            $file->move('assets/dashboard/document/', $filename);

            $documet = new loanDocument();
            $documet->loan_id = $loan->id;
            $documet->file = $filename;
            $documet->save();

            $not = '' . Auth::user()->name . ' upload the document.';
            $to = 1;
            $by = Auth::user()->id;
            $url = 'admin/loan/detail/' . $loan->id . '';

            $event = event(new notification($not, $to, $by, $url));


        }
        return back()->with('success', 'Document uploaded successfully');


    }

    public function loanDocument($id)
    {

        $loanadd = loanApplyCompany::with('document')->find($id);

        return view('dashboard.common.loanDocument', compact('loanadd'));
    }

    public function status()
    {

        $equity = loanApplyCompany::where('user_id', \Auth::user()->id)->where('category', 'Home equity')->get();
        $estate = loanApplyCompany::where('user_id', \Auth::user()->id)->where('category', 'Real estate financing')->get();

        return view('dashboard.user.status', compact('estate', 'equity'));
    }

    public function report()
    {
        $report = report::all();
        return view('dashboard.user.report', compact('report'));
    }

    public function myprofile()
    {
        $user = User::find(\Auth::user()->id);
        return view('dashboard.user.myprofile', compact('user'));
    }

    public function refrel()
    {

        $url = \request()->root() . '/register?id=' . \Auth::id();
        $refrel = User::where('refrel_id', \Auth::user()->id)->get();

        return view('dashboard.user.refrel', compact('url', 'refrel'));
    }

    public function history()
    {


        $equity = loanApplyCompany::where('category', 'Home equity')->get()->count();
        $estate = loanApplyCompany::where('category', 'Real estate financing')->get()->count();

        $pending = loanApplyCompany::where('user_id', Auth::user()->id)->where('status', "Pending")->get()->count();
        $unfit = loanApplyCompany::where('user_id', Auth::user()->id)->where('status', "Unfit Loan")->get()->count();
        $dpending = loanApplyCompany::where('user_id', Auth::user()->id)->where('status', "Documentation Pending")->get()->count();
        $analysis = loanApplyCompany::where('user_id', Auth::user()->id)->where('status', "Loan under Analysis")->get()->count();
        $resolution = loanApplyCompany::where('user_id', Auth::user()->id)->where('status', "Pending Resolution")->get()->count();
        $finished = loanApplyCompany::where('user_id', Auth::user()->id)->where('status', "Finished")->get()->count();


        return view('dashboard.common.history', compact('equity', 'estate', 'pending', 'unfit', 'dpending', 'analysis', 'resolution', 'finished'));
    }

}
