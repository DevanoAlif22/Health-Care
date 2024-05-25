<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::get();
        return view('/blog/blog',['data' => $data]);
    }
    
    public function baca(Request $request, $id)
    {
        $id = $request->id;
        $data = Blog::where('id',$id)->get();
        return view('/blog/baca',['data' => $data]);
    }

    public function tambah(Request $request)
    {
        $blog = new Blog;
        $blog->judul = $request->judul;
        $blog->isi = $request->isi;
        $blog->link = $request->link;
        $foto = $request->file('gambar')->store('gambar', 'public');
        $blog->gambar = substr($foto,7);
        $tambah = $blog->save();
        return redirect('/blog');
    }

    public function hapus($id)
    {
        $data = Blog::findOrFail($id);
        $delete = DB::table('blog')->where('id',$id)->delete();
        return redirect('/blog');
    }
}
