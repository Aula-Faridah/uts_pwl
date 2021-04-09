<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        return view('home',['posts' => $posts]);
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile',['user'=>$user]);
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile_edit',['user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'name' => 'required',
            'email' => 'required',
        ]);

        User::find($id)->update([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
           ])
           ;
        return redirect()->route('profile')->with('success', 'Profile Berhasil Diupdate');
    }
}
