<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\tag;
use App\Models\User;
use App\Models\info;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = info::latest()->paginate(15);
        return view ('backend.content.info.index', [
            'title' => 'Informasi',
            'active' => 'informasi',
            'info' => $info
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'title' => 'required|max:255|unique:infos',
            'content' => 'required|min:3',
            'gambar' => 'required',
            'category_id' => 'required',
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
            'category_id' => $request->category_id
            
        ]);


        $info->tag()->attach($request('tags'));
        $gambar->move('public/uploads/posts/', $new_gambar);
        return redirect('/dashboard/info')->with('success', 'Informasi telah berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(info $info)
    {
        return view('backend.content.info.edit',[
            'title' => 'tambah informasi',
            'active' => 'informasi',
            'info' => $info,
            'category' => category::all(),
            'tag' => tag::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $validasiData = $request->validate([
            'title' => 'required|max:255|unique:infos',
            'content' => 'required|min:3',
            'category_id' => 'required',
            // 'tags_id' => 'required'
            // 'excerpt' => 'min:3'
        ]);

                
        $validasiData['slug' ] = Str::slug($request->title);
        $validasiData['excerpt'] = Str::limit(strip_tags($request->content), 10, );

            $info = info::findorfail($slug);
            if($request->has('gambar')){
                $gambar = $request->gambar;
                $new_gambar = time().$gambar->getClientOriginalName();
                $gambar->move('public/uploads/posts/', $new_gambar);

                        

        $info_data =  [
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $validasiData['slug'],
            'excerpt' => $validasiData['excerpt'],
            'gambar' => 'public/uploads/psosts/'.$new_gambar,
            'category_id' => $request->category_id
            
        ];
            }else{
                    

        $info_data =  [
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $validasiData['slug'],
            'excerpt' => $validasiData['excerpt'],
            'category_id' => $request->category_id
            
        ];
            }

   


        // $info->tags()->sync($request('tags'));
        $info->update($info_data);
        return redirect('/dashboard/info')->with('success', 'Informasi telah berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $info = info::findorfail($slug);
        $info->delete();

        return redirect()->back()->with('success', 'informasi telah berhasil di hapus');
    }
}
