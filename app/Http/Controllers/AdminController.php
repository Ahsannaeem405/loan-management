<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\loan;
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
        $loan=loan::with('document')->find($id);
        $companies=companies::all();
        return view('dashboard.admin.loanDetail',compact('loan','companies','i'));
    }

    public
    function companies()
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
