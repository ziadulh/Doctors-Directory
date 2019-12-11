<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\regdoc;

class registerDoctor extends Controller
{
    public function form(){
    	return view('pages.doctorsRegistrationForm');
    }

    public function store(Request $request)
    {
    	$data = new regdoc;
    	$data->name = $request->input('name');
    	$data->email = $request->input('email');
    	$data->phone = $request->input('phone');
    	$data->specialization = $request->input('specialization');
    	$data->servicetime = $request->input('servicetime');
    	$data->region = $request->input('region');
    	$data->save();
    	return redirect('/');
    }

    public function list()
    {
        $data = regdoc::all();
        return view('pages.dlist')->with('data',$data);
    }

    public function show($id)
    {
        $data = regdoc::find($id);
        return view('pages.dshow')->with('data',$data);
    }

    public function edit($id)
    {
        $data = regdoc::find($id);
        return view('pages.editDoctorsInfo')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $data = regdoc::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->specialization = $request->input('specialization');
        $data->servicetime = $request->input('servicetime');
        $data->region = $request->input('region');
        $data->save();

        return redirect('/doctors/list');
    }


    public function destroy($id)
    {
        $data = regdoc::find($id);
        $data->delete();
        return redirect('/doctors/list');
    }
}

