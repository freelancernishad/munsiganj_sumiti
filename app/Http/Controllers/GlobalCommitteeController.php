<?php

namespace App\Http\Controllers;

use App\Models\GlobalCommittee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GlobalCommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//  return allcountryflag('Ascension Island');

// foreach(allcountry() as $list=>$value){
//     echo $value->name;

// }
// die();


        $data['rows'] = GlobalCommittee::orderBy('id','DESC')
        ->get();

        return view('admin/globalcommittee.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Table =  DB::getSchemaBuilder()->getColumnListing('global_committees');
        $row = [];
        foreach ($Table as $rowname) {
            $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;

        return view('admin/globalcommittee.add', $data);
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
            DB::table('global_committees')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('globalcommittee.index'));
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('global_committees')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('globalcommittee.index'));
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GlobalCommittee  $globalCommittee
     * @return \Illuminate\Http\Response
     */
    public function show(GlobalCommittee $globalCommittee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GlobalCommittee  $globalCommittee
     * @return \Illuminate\Http\Response
     */
    public function edit(GlobalCommittee $globalCommittee,$id)
    {



     $data['rows'] = DB::table('global_committees')->where('id',$id)->get();

        return view('admin/globalcommittee.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GlobalCommittee  $globalCommittee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GlobalCommittee $globalCommittee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GlobalCommittee  $globalCommittee
     * @return \Illuminate\Http\Response
     */
    public function destroy(GlobalCommittee $globalCommittee,$id)
    {


$globalCommittee = GlobalCommittee::find($id);

        $globalCommittee->delete();
        return redirect()->back();
    }
}
