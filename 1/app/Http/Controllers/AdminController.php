<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class AdminController extends Controller
{
    public function getPageForAdmin(){
        return view('welcome');
    }

    public function checkLoginForAdmin(Request $request){
        $data = $request->all();
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $result = DB::table('admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        // dd($result);
        if($result == true){
            Session::put('admin_name',$request->admin_name);
            return view('admin.dashboard');
        }else{
            return Redirect()->Route('ADMIN')->with('message','Sai thông tin!');
        }
    }
}
