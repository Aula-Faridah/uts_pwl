<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('about', compact('posts'))-> with ('i', (request()->input('page',1) - 1) * 5);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'artikel' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('home')->with('success', 'Artikel Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $Post = Post::find($id);
        return view('detail', compact('Post'));
    }

    public function edit($id)
    {
        $Post = Post::find($id);
        return view('edit', compact('Post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'artikel' => 'required',
        ]);

        Post::find($id)->update($request->all());
        return redirect()->route('home')->with('success', 'Artikel Berhasil Diupdate');
    }

    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('home')->with('success', 'Artikel Berhasil Dihapus');
    }
}
