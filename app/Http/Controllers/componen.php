<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\tag;
use App\Models\User;
use App\Models\info;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class componen extends Controller
{
    public function index()
    {
        $users = user::latest()->paginate(5);
        $category = category::latest()->paginate(500);
        $tag = tag::latest()->paginate(500);
        return view('backend.content.dashboard', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'category' => $category,
            'tag' => $tag,
            'users' => $users,
            
        ]);

        
    }


    // -------------------->CATEGORY<------------------------------ 
    public function storeCategory(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required|unique:categories|min:2',

        ]);

        $category = category::create([
        'name' => $request->name,
        'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('pesan', 'category telah berhasil di tambahkan');
    }

    public function destroyCategory($slug)
    {
        $category = category::findorfail($slug);
        $category->delete();
        return redirect()->back()->with('pesan', 'category  telah berhasil di hapus');
    }

    // ------------------------>TAGGG<--------------------------
    public function storeTag(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required|unique:categories|min:2',
    
        ]);
    
        $tag = tag::create([
        'name' => $request->name,
        'slug' => Str::slug($request->name)
        ]);
    
        return redirect()->back()->with('pesan', 'tag telah berhasil di tambahkan');
    }

    public function destroyTag($slug)
    {
        $tag = tag::findorfail($slug);
        $tag->delete();

        return redirect()->back()->with('pesan', 'tag telah berhasil di hapus');
    }



    // ------------------->INFORMASI CONTROLLER<-----------------------
    public function indexInfo()
    {
        $info = info::latest()->paginate(15);
        return view ('backend.content.info.index', [
            'title' => 'Informasi',
            'active' => 'informasi',
            'info' => $info
            
        ]);

        
    }

    public function createInfo()
    {
        $tags = tag::all();
        $info = info::all();
        $category = category::all();
        return view ('backend.content.info.create', [
            'title' => 'Buat Informasi',
            'active' => 'informasi',
            'info' => $info,
            'category' => $category,
            'tags' => $tags
            
            
        ]);
    }

    public function storeInfo(Request $request)
    {
        $validasiData = $request->validate([
            'title' => 'required|max:255|unique:infos',
            'content' => 'required|min:3',
            'gambar' => 'required',
            'categories_id' => 'required',
            // 'tags_id' => 'required'
            // 'excerpt' => 'min:3'
        ]);
        
        $validasiData['slug' ] = Str::slug($request->title);
        $validasiData['excerpt'] = Str::limit(strip_tags($request->content), 10, );


        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $info =  info::create([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $validasiData['slug'],
            'excerpt' => $validasiData['excerpt'],
            'gambar' => 'public/uploads/posts/'.$new_gambar,
            'catgories_id' => $request->categories_id
            
        ]);


        $info->tags()->attach(request('tags'));
        $gambar->move('public/uploads/posts/', $new_gambar);
        return redirect('/dashboard/info')->with('success', 'Informasi telah berhasil di tambahkan');
    }

    
}
