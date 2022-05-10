<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Home;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //


    public function index(Request $request)
    {
        $page = 'home';
        $sliderdata = Home::limit(9)->get();
        $homelist1 = Home::limit(6)->get();
        $setting = Setting::first();
        return view('home.index', [
            'page' => $page,
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'homelist1' => $homelist1
        ]);
    }

    public function about()
    {
        $setting = Setting::first();
        return view('home.about', [
            'setting' => $setting
        ]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', [
            'setting' => $setting
        ]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', [
            'setting' => $setting
        ]);
    }

    public function faq()
    {
        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq', [
            'setting' => $setting,
            'datalist' => $datalist
        ]);
    }

    public function storemessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Your message has been sent, Thank You.');
    }

    public function storecomment(Request $request)
    {
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->home_id = $request->input('home_id');
        $data->subject = $request->input('subject');
        $data->rate = $request->input('rate');
        $data->review = $request->input('review');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('home', ['id' => $request->input('home_id')])->with('success', 'Your comment has been sent, Thank You.');
    }

    public function home($id)
    {
        $data = Home::find($id);
        $images = DB::table('images')->where('home_id', $id)->get();
        $reviews = Comment::where('home_id', $id)->get();
        return view('home.home', [
            'data' => $data,
            'images' => $images,
            'reviews' => $reviews
        ]);
    }

    public static function maincategorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public function categoryhomes($id){
        $category=Category::find($id);
        $homes = DB::table('homes')->where('category_id', $id)->get();

        return view('home.categoryhomes',[
            'category'=>$category,
            'homes'=>$homes
        ]);
    }

    public function getproduct(Request $request)
    {
        $data = Home::where('title',$request->input('search'))->first();
        return redirect()->route('home',['id'=>$data->id,'slug'=>$data->slug]);
    }

    public function agents(Request $request)
    {
        $agents = Agent::all();
        return view('home.agents', [
            'agents' => $agents
        ]);
    }
    public function agenti(Request $request)
    {
        $agents = Agent::all();
        return view('home.agenti', [
            'agents' => $agents
        ]);
    }
    public function agentn(Request $request)
    {
        $agents = Agent::all();
        return view('home.agentn', [
            'agents' => $agents
        ]);
    }
    public function agentk(Request $request)
    {
        $agents = Agent::all();
        return view('home.agentk', [
            'agents' => $agents
        ]);
    }


    public
    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public
    function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


}
