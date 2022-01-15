<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               
        $data['rows'] = gallery::orderBy('id','DESC')
        ->get();

        return view('admin/gallery.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Table =  DB::getSchemaBuilder()->getColumnListing('galleries');
        $row = [];
        foreach ($Table as $rowname) {
            $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;
     
        return view('admin/gallery.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        $status = $request->status;
        $data = [];
        $inputData = $request->all();
        foreach ($inputData as $key => $value) {
            if ($key == 'id' || $key == '_token') {
            } else {
                $data[$key] = $value;
            }
        }
        if ($id == '') {
            DB::table('galleries')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('gallery.index'));
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('galleries')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('gallery.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
        $id = $gallery->id;


        $data['rows'] = DB::table('galleries')->where('id',$id)->get();
        
            return view('admin/gallery.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        $gallery->delete();
        return redirect()->back();
    }
}
