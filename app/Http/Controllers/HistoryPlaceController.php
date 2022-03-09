<?php

namespace App\Http\Controllers;

use App\Models\historyPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\historyCategory;
class HistoryPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows'] = historyPlace::orderBy('id','DESC')->get();

        return view('admin/historyPlace.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Table =  DB::getSchemaBuilder()->getColumnListing('history_places');
        $row = [];
        foreach ($Table as $rowname) {
                $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;
        $data['cate'] = historyCategory::orderBy('id','DESC')->get();
        return view('admin/historyPlace.add', $data);
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

        $category = $request->category;
         $parentCategory = historyCategory::where('name',$category)->get();
 $parentCategory = $parentCategory[0]->parent;
        // return $request->all();

        $id = $request->id;

        $data = [];
        $inputData = $request->all();
        foreach ($inputData as $key => $value) {
            if ($key == 'id' || $key == '_token') {
            } else {
                $data[$key] = $value;
            }
        }


        $data['parentCategory'] = $parentCategory;
        if ($id == '') {




            DB::table('history_places')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('HistoryPlace.index'));
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('history_places')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('HistoryPlace.index'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\historyPlace  $historyPlace
     * @return \Illuminate\Http\Response
     */
    public function show(historyPlace $historyPlace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\historyPlace  $historyPlace
     * @return \Illuminate\Http\Response
     */
    public function edit(historyPlace $historyPlace,$id)
    {
        $data['cate'] = historyCategory::orderBy('id','DESC')->get();
        $data['rows'] = DB::table('history_places')->where('id',$id)->get();
        return view('admin/HistoryPlace.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\historyPlace  $historyPlace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, historyPlace $historyPlace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\historyPlace  $historyPlace
     * @return \Illuminate\Http\Response
     */
    public function destroy(historyPlace $historyPlace,$id)
    {

        $historyPlace = historyPlace::find($id);

        $historyPlace->delete();
        return redirect()->back();
    }
}
