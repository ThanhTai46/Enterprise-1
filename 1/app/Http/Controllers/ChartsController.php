<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Http\Requests\AccountRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class ChartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.charts.index');
        
    }
 
    
}
