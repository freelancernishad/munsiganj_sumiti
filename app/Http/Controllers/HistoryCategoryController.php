<?php

namespace App\Http\Controllers;

use App\Models\historyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows'] = historyCategory::orderBy('id','DESC')->get();

        return view('admin/historyCategory.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Table =  DB::getSchemaBuilder()->getColumnListing('history_categories');
        $row = [];
        foreach ($Table as $rowname) {
                $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;

        return view('admin/historyCategory.add', $data);
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



            $request->validate([
                'name' => 'required|unique:history_categories',
                'parent' => 'required',

            ]);


            DB::table('history_categories')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('HistoryCategory.index'));
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('history_categories')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('HistoryCategory.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\historyCategory  $historyCategory
     * @return \Illuminate\Http\Response
     */
    public function show(historyCategory $historyCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\historyCategory  $historyCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(historyCategory $historyCategory,$id)
    {

        $data['rows'] = DB::table('history_categories')->where('id',$id)->get();
        return view('admin/historyCategory.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\historyCategory  $historyCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, historyCategory $historyCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\historyCategory  $historyCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(historyCategory $historyCategory,$id)
    {

        $historyCategory = historyCategory::find($id);

        $historyCategory->delete();
        return redirect()->back();
    }
}
