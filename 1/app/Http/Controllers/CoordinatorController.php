<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Http\Requests\AccountRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class CoordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        //
        
    }
    public function manage_coordinator()
    {
        $coordinator = DB::table('cordinator')->get();
        
        //return view('admin.faculity.manage_faculty',['faculity' => $faculity] );
        return view('admin.coordinator.manage_coordinator')->with('coordinator',$coordinator);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $faculity = DB::table('faculity')->get();
        // $data = Account::all();
        return view('admin.coordinator.create_coordinator') ->with('faculity',$faculity);
    }

    public function storedCoordinator(Request $request)
    {
        DB::table('cordinator')->insert([
            'Cordinator_name' => $request->namecoordinator,
            'Cordinator_email' => $request->email,
            'Cordinator_phone' => $request->phone,
            'Cordinator_address' => $request->address,
            'Faculity_name' => $request->faculty,
        ]);
        return redirect('management_coordinator')->with('status', 'Add Coordinator Successful!');
    }

   

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $faculity = DB::table('faculity')->get();
        $coordinator = DB::table('cordinator')->where('Cordinator_id', $id)->first();
        
      
        return view('admin.coordinator.edit_cordinator' , compact('coordinator')) ->with('faculity',$faculity);
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('cordinator')->where('Cordinator_id', $id)->update([
            'Cordinator_name' => $request->namecoordinator,
            'Cordinator_email' => $request->email,
            'Cordinator_phone' => $request->phone,
            'Cordinator_address' => $request->address,
            'Faculity_name' => $request->faculty,
        ]);
         return redirect('management_coordinator')->with('status', 'Update Coordinator Successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        DB::table('cordinator')->where('Cordinator_id', $id)->delete();
        return redirect('management_coordinator')->with('status', 'Delete Coordinator Successful!');

    }

    public function contributions()
    {
        return view ('admin.contributions.index');
    }

    public function comment()
    {
        return view ('admin.contributions.comment');
    }
}
