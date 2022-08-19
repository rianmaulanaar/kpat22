<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $b = Blog::all();
        return view('tabelblog', compact('b'));
    }

    public function create()
    {
        return view('tambahdata');
    }

    public function save(Request $request)
    {
        $request->validate
        ([
            'author' => 'required',
            'title' => 'required',
            'body' => 'required',
            'keyword' => 'required'
        ]);
        Blog::create($request->all());
        return redirect('tabelblog');
    }

    public function delete(Blog $id)
    {
        $id->delete();
        return redirect('tabelblog');
    }

    public function edit(Blog $ubah)
    {
        return view('ubahdata', compact('ubah'));
    }

    public function update(Request $request, Blog $ubah)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required',
            'body' => 'required',
            'keyword' => 'required'
        ]);

        $ubah->update($request->all());
        return redirect('tabelblog');
    }

}
