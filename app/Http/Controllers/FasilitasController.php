<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Fasilitas::all();
        return view('admin.fasilitas.fasilitas',compact('data'));
    }

    public function create(){
        return view('admin.fasilitas.tambahfasilitas');
    }

    public function store(Request $request){
        $this->validate($request,[
            'kamar_id'=>'required', 
            'nama'=>'required'
        ]);
        fasilitas::create($request->all());
        return redirect()->route('fasilitas');
    }

    public function edit($id){
        $data = fasilitas::find($id);
        return view('admin.fasilitas.editfasilitas', compact('data'));
    }

    public function update(Request $request, $id){
        $data = fasilitas::find($id);
        $data->update($request->all());
        return redirect()->route('fasilitas');
    }

    public function destroy($id){
        $data = fasilitas::find($id);
        $data->delete();
        return redirect()->route('fasilitas');
    }
}
