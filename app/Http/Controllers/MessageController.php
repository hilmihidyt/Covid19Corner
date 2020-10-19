<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $message = Message::orderBy('id','desc')->get();

        return view('admin.message.index',compact('message'));
    }
}
