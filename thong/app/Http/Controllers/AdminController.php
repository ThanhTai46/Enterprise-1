<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Account;

class AdminController extends Controller
{
    public function getPageForAdmin(){
        return view('loginadmin');
    }

    public function getLogin(){
        return view('loginadmin');
    }

    public function AdminDashboard(){
        return view('admin.dashboardAdmin');
    }

    public function checkLoginForAdmin(Request $request){
        $data = $request->all();
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;
        $result = DB::table('admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        // dd($result);
        if($result == true){
            Session::put('admin_name',$request->admin_name);
            return Redirect()->route('DASHBOARD')->with('message','Welcome Admin!');
        }else{
            return Redirect()->Route('ADMIN')->with('message','Sai thông tin!');
        }
    }

    
}
