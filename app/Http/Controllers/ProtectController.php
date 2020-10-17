<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Protect;
class ProtectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protect = Protect::all();
        return view ('admin.protect.index', compact('protect'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $protect        = new Protect();
        $protect->title = $request->title;
        $protect->type  = $request->type;

        if ($protect->save()) {

                return redirect()->route('admin.protect')->with('success', 'Data Berhasil Ditambahkan');
        
               } else {
                   
                return redirect()->route('admin.protect')->with('error', 'Data Gagal Ditambahkan');
        
               }
    }

    
    public function edit($id)
    {
        $protect = Protect::findOrFail($id);
        return view ('admin.protect.edit', compact('protect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $protect        = Protect::findOrFail($id);
        $protect->title = $request->title;
        $protect->type  = $request->type;

        if ($protect->save()) {

                return redirect()->route('admin.protect')->with('success', 'Data Berhasil Diperbarui');
        
               } else {
                   
                return redirect()->route('admin.protect.edit')->with('error', 'Data Gagal Diperbarui');
        
               }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $protect        = Protect::findOrFail($id);
        $protect->delete();
        return redirect()->route('admin.protect')->with('success', 'Data Berhasil Dihapus');
    }
}
