<?php

namespace App\Http\Controllers;

use App\Models\ProminentPersons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProminentPersonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows'] = ProminentPersons::orderBy('id','DESC')->get();

        return view('admin/ProminentPersons.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Table =  DB::getSchemaBuilder()->getColumnListing('prominent_persons');
        $row = [];
        foreach ($Table as $rowname) {
                $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;

        return view('admin/ProminentPersons.add', $data);
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

        //   return $request->all();

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
            DB::table('prominent_persons')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('ProminentPersons.index'));
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('prominent_persons')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('ProminentPersons.index'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProminentPersons  $prominentPersons
     * @return \Illuminate\Http\Response
     */
    public function show(ProminentPersons $prominentPersons,$id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProminentPersons  $prominentPersons
     * @return \Illuminate\Http\Response
     */
    public function edit(ProminentPersons $prominentPersons,$id)
    {
        $data['rows'] = DB::table('prominent_persons')->where('id',$id)->get();
        return view('admin/ProminentPersons.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProminentPersons  $prominentPersons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProminentPersons $prominentPersons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProminentPersons  $prominentPersons
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProminentPersons $prominentPersons,$id)
    {

        $prominentPersons = ProminentPersons::find($id);

        $prominentPersons->delete();
        return redirect()->back();
    }
}
