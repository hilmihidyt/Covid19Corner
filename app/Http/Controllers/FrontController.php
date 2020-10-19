<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use\App\{Category, General,Message, Post, Protect, Symptom ,Tag};

class FrontController extends Controller
{
    public function home()
    {
        $idcovid = Http::get('https://api.kawalcorona.com/indonesia');
        $iddata = $idcovid->json();
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data = $response->json();
        $general = General::find(1);
        $lblog = Post::orderBy('id','desc')->limit(3)->get();
        $symptom = Symptom::all();
        $do = Protect::where('type',1)->get();
        $avoid = Protect::where('type',2)->get();
        return view('welcome',compact('avoid','data','do','general','iddata','lblog','symptom'));
    }

    public function blog(){
        $general = General::find(1);
        $posts = Post::orderBy('id','desc')->paginate(6);
        return view ('blog', compact('general','posts'));
    }

    public function blogshow($slug){
        $general = General::find(1);
        $post = Post::where('slug', $slug)->firstOrFail();
        $old = $post->views;
        $new = $old + 1;
        $post->views = $new;
        $post->update();
        $categories = Category::get();
        $lblog = Post::orderBy('id','desc')->limit(5)->get();
        return view ('blogshow', compact('general','post','categories','lblog'));
    }

    public function category(Category $category)
    {
        $general = General::find(1);
        $posts = $category->posts()->latest()->paginate(12);
        return view ('blog',compact('general','posts','category'));
    }

    public function tag(Tag $tag)
    {
        $general = General::find(1);
        $posts = $tag->posts()->latest()->paginate(12);
        return view ('blog',compact('general','posts','tag'));
    }

    public function search()
    {
        $query = request("query");
        $posts = Post::where("title","like","%$query%")->latest()->paginate(9);
        $general = General::find(1);
        return view('blog',compact("posts","query","general"));
    }

    public function contact(){
        $general = General::find(1);
        return view('contact', compact('general'));
    }

    public function message(Request $request)
    {
        \Validator::make($request->all(), [
            "name" => "required",
            "email" => "required",
            "subject" => "required",
            "body" => "required"         
        ])->validate();

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->body = $request->body;

       $message->save();

       if ( $message->save()) {

        return redirect()->route('contact')->with('sended', 'Your message was successfully sent');

       } else {
           
        return redirect()->route('contact')->with('failed', 'Your message failed to send');

       }
    }
}
