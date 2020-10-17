<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Symptom;

class SymptomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $symptom = Symptom::all();
        return view ('admin.symptom.index', compact('symptom'));
    }

    public function store(Request $request)
    {
        $symptom        = new Symptom();
        $symptom->title = $request->title;
        $symptom->desc  = $request->desc;

        if($request->file('logo')){
            $file = $request->file('logo')->store('symptom', 'public');
            $symptom->logo = $file;
        }

        if ($symptom->save()) {

                return redirect()->route('admin.symptom')->with('success', 'Data Berhasil Ditambahkan');
        
               } else {
                   
                return redirect()->route('admin.symptom')->with('error', 'Data Gagal Ditambahkan');
        
               }
    }

    public function edit($id)
    {
        $symptom = Symptom::findOrFail($id);
        return view ('admin.symptom.edit', compact('symptom'));
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
        $symptom        = Symptom::findOrFail($id);
        $symptom->title = $request->title;
        $symptom->desc  = $request->desc;

        if($request->file('logo')){
            if($symptom->logo && file_exists(storage_path('app/public/' . $symptom->logo))){
            \Storage::delete('public/'.$symptom->logo);
            }
            $file = $request->file('logo')->store('symptom', 'public');
            $symptom->logo = $file;
            }

        if ($symptom->update()) {

                return redirect()->route('admin.symptom')->with('success', 'Data Berhasil Diperbarui');
        
               } else {
                   
                return redirect()->route('admin.symptom.edit')->with('error', 'Data Gagal Diperbarui');
        
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
        $symptom = Symptom::findOrFail($id);
        if($symptom->logo && file_exists(storage_path('app/public/' . $symptom->logo))){
            \Storage::delete('public/'.$symptom->logo);
        }
        $symptom->delete();
        return redirect()->route('admin.symptom')->with('success', 'Data Berhasil Dihapus');
    }
}
