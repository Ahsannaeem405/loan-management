<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\loan;
use App\Models\loanApplyCompany;
use App\Models\loanCompanyComment;
use App\Models\loanCompanyDocument;
use App\Models\loanDocument;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;

class AdminController extends Controller
{
    public function dashboard()
    {

        return view('dashboard.admin.index');
    }

    public function myprofile()
    {
        $user = User::find(\Auth::user()->id);

        return view('dashboard.admin.myprofile', compact('user'));
    }

    public function myprofileUpdate(Request $request)
    {
        $user = User::find(\Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->hasfile('profile')) {
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('assets/dashboard/profile/', $filename);

            $user->profile = $filename;

        }

        $user->save();
        return back()->with('success', 'profile updated successfully');
    }

    public function passwordUpdate(Request $request)
    {

        $user = User::find(\Auth::user()->id);
        if ($request->password != null && $request->old_pass) {

            $request->validate([

                'password' => ['required', 'confirmed'],


            ]);


            if (\Hash::check($request->old_pass, $user->password)) {
                $user->fill([
                    'password' => \Hash::make($request->password)
                ])->save();
                return back()->with('success', 'password updated successfully');

            } else {
                return back()->with('error', 'Password does not match');
            }
        }

        return back()->with('error', 'Enter password to update');

    }

    public function user()
    {
        $users = User::where('role', 'user')->get();
        return view('dashboard.admin.user', compact('users'));
    }

    public function userDelete($id)
    {
        $users = User::find($id)->delete();
        return back()->with('success', 'user deleted successfully');
    }

    public function loan()
    {

        $loans = loan::orderBy('id', "DESC")->get();
        return view('dashboard.admin.loan', compact('loans'));
    }

    public function loanDelete($id)
    {
        $loans = loan::find($id)->delete();
        return back()->with('success', 'Record deleted successfully');

    }

    public function loanDetail($id)
    {
        $i=1;
        $loan=loan::with('document','applyCom')->find($id);

        $companies=companies::all();
        return view('dashboard.admin.loanDetail',compact('loan','companies','i'));
    }

    public function CompanyAddLoan(Request $request,loan  $id)
    {

        if (!$request->name){
            return back()->with('error','Please Select Company');
        }
        $name=count($request->name);
        for ($i=0; $i<$name ; $i++)
        {
            $loanAdd=new loanApplyCompany();
            $loanAdd->name=$request->name[$i];
            $loanAdd->category=$request->cat[$i];
            $loanAdd->type=$request->type[$i];
            $loanAdd->price=$request->price[$i];
            $loanAdd->loan_id=$id->id;
            $loanAdd->user_id=$id->user_id;
            $loanAdd->save();
        }
        return back()->with('success','Record added successfully');
    }

    public function statusLoan(Request $request)
    {

     // dd($request->input());
        if (!$request->ids){
            return back()->with('error','Nothing to update');
        }

        $ids=count($request->ids);
        for ($i=0; $i<$ids ; $i++) {

            $loanAdd = loanApplyCompany::find($request->ids[$i]);

            $loanAdd->status=$request->status[$i];
            $loanAdd->update();
        }
        return back()->with('success','status updated successfully');
    }

    public function viewComment($id)
    {
        $loanadd=loanApplyCompany::with('comment')->find($id);
      //  dd($loanadd);

return view('dashboard.admin.comment',compact('loanadd'));
    }

    public function sendComment($id,Request $request)
    {
        $comment=new loanCompanyComment();
        $comment->user_id=\Auth::user()->id;
        $comment->loan_apply_id=$id;
        $comment->comment=$request->msg;
        $comment->save();
        return back()->with('success','Message send successfully');
    }
    public function sendDocument($id,Request $request)
    {
        $doc=new loanCompanyDocument();
        $doc->user_id=\Auth::user()->id;
        $doc->loan_apply_id=$id;
        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $file->getClientOriginalName();
            $file->move('assets/dashboard/document/', $filename);



            $doc->file=$filename;


        }
        $doc->save();
        return back()->with('success','Document send successfully');
    }

    public function companies()
    {



        $companies = companies::all();
        return view('dashboard.admin.companies', compact('companies'));

    }

    public
    function Addcompanies(Request $request)
    {
        $company = new companies();
        $company->name = $request->name;
        $company->save();
        return back()->with('success', 'company added successfully');

    }

    public
    function CompanyUpdate(Request $request, $id)
    {
        $company = companies::find($id);
        $company->name = $request->name;
        $company->save();
        return back()->with('success', 'company updated successfully');

    }


    public
    function CompanyDelete($id)
    {
        $users = companies::find($id)->delete();
        return back()->with('success', 'company deleted successfully');
    }


}
