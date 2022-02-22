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
        $info = info::latest()->paginate(500);
        return view('backend.content.dashboard', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'category' => $category,
            'tag' => $tag,
            'info' => $info,
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



 


    public function singleInfo(info $info)
    {
        return view('backend.content.info.single', [
            'title' => 'Informasi',
            'active' => 'informasi',
            'info' => $info
        ]);
    }

}
