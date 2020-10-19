<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Message, Post, Protect, Symptom};
class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $message = Message::count();
        $blog = Post::count();
        $protect = Protect::count();
        $symptom = Symptom::count();
        return view ('admin.dashboard', compact('message','blog','protect','symptom'));
    }
}
