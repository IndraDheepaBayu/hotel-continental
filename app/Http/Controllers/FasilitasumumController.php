<?php

namespace App\Http\Controllers;

use App\Models\Fasilitasumum;
use Illuminate\Http\Request;

class FasilitasumumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Fasilitasumum::all();
        return view('admin.fasilitasumum.fasilitasumum',compact('data'));
    }



    public function create(){
        return view('admin.fasilitasumum.tambahfasilitasumum');
    }

    public function store(Request $request){
        $this->validate($request,[
            'kamar'=>'required', 
            'nama'=>'required'
        ]);
        fasilitasumum::create($request->all());
        return redirect()->route('fasilitasumum');
    }

    public function edit($id){
        $data = fasilitasumum::find($id);
        return view('admin.fasilitasumum.editfasilitasumum', compact('data'));
    }

    public function update(Request $request, $id){
        $data = fasilitasumum::find($id);
        $data->update($request->all());
        return redirect()->route('fasilitasumum');
    }

    public function destroy($id){
        $data = fasilitasumum::find($id);
        $data->delete();
        return redirect()->route('fasilitasumum');
    }
}
