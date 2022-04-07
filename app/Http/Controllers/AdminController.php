<?php

namespace App\Http\Controllers;

use App\Events\notification;
use App\Models\banner;
use App\Models\companies;
use App\Models\loan;
use App\Models\loanApplyCompany;
use App\Models\loanCompanyComment;
use App\Models\loanCompanyDocument;
use App\Models\loanDocument;
use App\Models\report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Testing\Fluent\Concerns\Has;

class AdminController extends Controller
{
    public function markasRead()
    {
        $not=\App\Models\notification::where('to',\Auth::user()->id)->update(['read'=>1]);
       // dd(Auth::user()->id);
        return back();
    }

    public function dashboard()
    {

        $user=User::where('role','user')->get()->count();
        $admin=User::where('role','admin')->get()->count();
        $loan=loan::get()->count();
        $companies=companies::get()->count();
        $equity=loan::where('type','Home equity')->get()->count();
        $estate=loan::where('type','Real estate financing')->get()->count();
        return view('dashboard.admin.index',compact('user','admin','loan','companies','equity','estate'));
    }

    public function notification(\App\Models\notification  $id)
    {
$not=$id;
$not->read=1;
$not->update();
return redirect($not->url);

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
        return back()->with('success', 'Profile updated successfully');
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
                return back()->with('success', 'Password updated successfully');

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
        return back()->with('success', 'User deleted successfully');
    }

    public function loan()
    {

        $loans = loan::orderBy('id', "DESC")->where('status',1)->get();
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
            $loanAdd->category=$request->cat[$i]=='Crédito com Garantia de Imóvel' ?  'Home equity'  : $request->cat[$i];
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


            if ($loanAdd->status!=$request->status[$i])
            {
                $not='Your Loan application status for '.$loanAdd->name.' has changed to '.$request->status[$i].'.';
                $to=$loanAdd->user_id;
                $by=\Auth::user()->id;
                $url='user/status';

                $event = event(new notification($not,$to,$by,$url));

            }


            $loanAdd->status=$request->status[$i];
            $loanAdd->update();


        }
        return back()->with('success','Status updated successfully');
    }

    public function viewComment($id)
    {
        $loanadd=loanApplyCompany::with('comment')->find($id);
      //  dd($loanadd);

return view('dashboard.common.comment',compact('loanadd'));
    }

    public function sendComment($id,Request $request)
    {
        $loanAdd = loanApplyCompany::find($id);
        $comment=new loanCompanyComment();
        $comment->user_id=\Auth::user()->id;
        $comment->loan_apply_id=$id;
        $comment->comment=$request->msg;
        $comment->save();


        $not='Your have received a message on '.$loanAdd->name.' by '.\Auth::user()->name.'.';
        $to=\Auth::user()->role=='user' ? 1 : $loanAdd->user_id;
        $by=\Auth::user()->id;
        $url=\Auth::user()->role=='user' ? 'admin/comment/'.$loanAdd->id.'' : 'user/comment/'.$loanAdd->id.'' ;

        $event = event(new notification($not,$to,$by,$url));


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






        $loanAdd = loanApplyCompany::find($id);



        $not='Your have received a document on '.$loanAdd->name.' by '.\Auth::user()->name.'.';
        $to=1;
        $by=\Auth::user()->id;
        $url='admin/loan/doc/'.$loanAdd->id.'' ;

        $event = event(new notification($not,$to,$by,$url));


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
        $company->credit = $request->credit;
        $company->type = $request->type;
        $company->save();
        return back()->with('success', 'Company added successfully');

    }

    public
    function CompanyUpdate(Request $request, $id)
    {
        $company = companies::find($id);
        $company->name = $request->name;
        $company->credit = $request->credit;
        $company->type = $request->type;
        $company->save();
        return back()->with('success', 'company updated successfully');

    }


    public function CompanyDelete($id)
    {
        $users = companies::find($id)->delete();
        return back()->with('success', 'Company deleted successfully');
    }

    public function history()
    {


        $equity=loanApplyCompany::where('category','Home equity')->get()->count();
        $estate=loanApplyCompany::where('category','Real estate financing')->get()->count();

        $pending=loanApplyCompany::where('status',"Pending")->get()->count();
        $unfit=loanApplyCompany::where('status',"Unfit Loan")->get()->count();
        $dpending=loanApplyCompany::where('status',"Documentation Pending")->get()->count();
        $analysis=loanApplyCompany::where('status',"Loan under Analysis")->get()->count();
        $resolution=loanApplyCompany::where('status',"Pending Resolution")->get()->count();
        $finished=loanApplyCompany::where('status',"Finished")->get()->count();


        return view('dashboard.common.history',compact('equity','estate','pending','unfit','dpending','analysis','resolution','finished'));
    }

    public function banner()
    {
        $banner=banner::first();
        return view('dashboard.admin.banner',compact('banner'));
    }

    public function Updatebanner(Request $request)
    {

        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $file->getClientOriginalName();
            $file->move('assets/dashboard/banner/', $filename);

            $banner=banner::find(1);
            $banner->image=$filename;
            $banner->update();
            return back()->with('success','Banner image updated successfully');



        }
    }

    public function report()
    {

        $report=report::all();
        return view('dashboard.admin.report',compact('report'));
    }

    public function uploadReport(Request $request)
    {

        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $file->getClientOriginalName();
            $file->move('assets/dashboard/report/', $filename);

            $report= new report();
            $report->file=$filename;
            $report->save();
            return back()->with('success','Report save successfully');

        }

    }


    public function deleteReport($id){
        $report=report::find($id)->delete();
        return back()->with('success','Report deleted successfully');

    }



}
