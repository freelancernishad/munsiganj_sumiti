<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['rows'] = Video::orderBy('id','DESC')->get();

        return view('admin/video.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $Table =  DB::getSchemaBuilder()->getColumnListing('videos');
        $row = [];
        foreach ($Table as $rowname) {
                $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;

        return view('admin/video.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             // echo'<pre>';
        // print_r($request->all());


        $id = $request->id;

        $data = [];
        $inputData = $request->all();
        foreach ($inputData as $key => $value) {
            if ($key == 'id' || $key == '_token') {
            } else {
                $data[$key] = $value;
            }
        }
        if ($id == '') {

            DB::table('videos')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('video.index'));
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('videos')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('video.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {

    $id = $video->id;


    $data['rows'] = DB::table('videos')->where('id',$id)->get();

        return view('admin/video.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $member->delete();
        return redirect()->back();
    }
}
