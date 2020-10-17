<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\General;

class GeneralController extends Controller
{
    public function edit()
    {
        $general = General::find(1);

        return view('admin.general.edit',compact('general'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        \Validator::make($request->all(), [
     
            "name" => "required",
            "title" => "required",
            "address" => "required",
            "phone" => "required" ,
            "email" => "required",
            "footer" => "required"      
        ])->validate();

        $general = General::find(1);
        $general->title = $request->title;
        $general->name = $request->name;
        $general->address = $request->address;
        $general->phone = $request->phone;
        $general->email = $request->email;
        $general->twitter = $request->twitter;
        $general->facebook = $request->facebook;
        $general->instagram = $request->instagram;
        $general->linkedin = $request->linkedin;
        $general->footer = $request->footer;
        $general->gverification = $request->gverification;
        $general->tawkto = $request->tawkto;
        $general->keyword = $request->keyword;
        $general->meta_desc = $request->meta_desc;

        $new_logo = $request->file('logo');

        if($new_logo){
        if($general->logo && file_exists(storage_path('app/public/' . $general->logo))){
            \Storage::delete('public/'. $general->logo);
        }

        $new_cover_path = $new_logo->store('images/general', 'public');

        $general->logo = $new_cover_path;
        }

        $new_favicon = $request->file('favicon');

        if($new_favicon){
        if($general->favicon && file_exists(storage_path('app/public/' . $general->favicon))){
            \Storage::delete('public/'. $general->favicon);
        }

        $new_cover_path = $new_favicon->store('images/general', 'public');

        $general->favicon = $new_cover_path;
        }


        // dd($general);
        if ( $general->save()) {

            return redirect()->route('admin.general.edit')->with('success', 'General updated successfully');
    
           } else {
               
            return redirect()->route('admin.general.edit')->with('error', 'General failed to update');
    
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
        //
    }
}
