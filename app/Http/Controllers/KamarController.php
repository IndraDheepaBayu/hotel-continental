<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kamar::all();
        return view('admin.kamar.index',compact('data'));
    }

    public function create(){
        return view('admin.kamar.tambahkamar');
    }

    public function store(Request $request){
        $this->validate($request,[
            'no_kamar'=>'required', 
            'harga'=>'required', 
            'kapasitas'=>'required', 
            'tipe'=>'required'
        ]);
        kamar::create($request->all());
        return redirect()->route('kamar');
    }

    public function edit($id){
        $data = kamar::find($id);
        return view('admin.kamar.editkamar', compact('data'));
    }

    public function update(Request $request, $id){
        $data = kamar::find($id);
        $data->update($request->all());
        return redirect()->route('kamar');
    }

    public function destroy($id){
        $data = kamar::find($id);
        $data->delete();
        return redirect()->route('kamar');
    }

}
