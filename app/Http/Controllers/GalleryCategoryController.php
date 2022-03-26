<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['form_type'] = 'new';

        $edit_data = [
            'name'=>'',

        ];
$edit_data = json_decode(json_encode($edit_data));

        $rows = GalleryCategory::orderBy('id','DESC')
        ->paginate(10);

        return view('admin/gallery.category',compact('rows','edit_data'),$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:gallery_categories',

        ]);


        $data = request()->except(['_token']);

        GalleryCategory::create($data);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryCategory $galleryCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(GalleryCategory $galleryCategory)
    {
        $random  = sprintf("%06d", mt_rand(1, 999999));
        $data['category_id'] = $random;
        $rows = GalleryCategory::paginate(10);
        $edit_data =  $galleryCategory;
        $data['form_type'] = 'edit';

        return view('admin/gallery.category',compact('edit_data','rows'),$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GalleryCategory $galleryCategory)
    {
        $request->validate([
            'name' => 'required|unique:gallery_categories,name,'.$galleryCategory->id,
        ]);

        $data = request()->except(['_token','_method']);

        $galleryCategory->update($data);

        return redirect(route('gallery_category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryCategory $galleryCategory)
    {
        $galleryCategory->delete();
    }
}
