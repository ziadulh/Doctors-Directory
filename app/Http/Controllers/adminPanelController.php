<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class adminPanelController extends Controller
{

	public function __construct()
    {
        $this->middleware('blockDefaultRegistration');
    }
	/*This will load all list include admin*/

	public function list(){
    		$data = User::all();
    		return view('pages.adminpanel')->with('data',$data);
    }

    public function edit($id){
    		$data = User::find($id);
    		return view('pages.editAdminPanelUser')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->save();
    	return redirect('/adminpanel');
    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/adminpanel');
    }
    
}
