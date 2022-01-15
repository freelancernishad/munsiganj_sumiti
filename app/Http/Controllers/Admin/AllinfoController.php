<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\allinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AllinfoController extends Controller
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
              
        $data['rows'] = allinfo::orderBy('id','DESC')
        ->get();

        return view('admin/allinfo.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Table =  DB::getSchemaBuilder()->getColumnListing('allinfos');
        $row = [];
        foreach ($Table as $rowname) {
            $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;
     
        return view('admin/allinfo.add', $data);
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
            DB::table('allinfos')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('allinfo.index'));
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('allinfos')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('allinfo.index'));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\allinfo  $allinfo
     * @return \Illuminate\Http\Response
     */
    public function show(allinfo $allinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\allinfo  $allinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(allinfo $allinfo)
    {
              
     $id = $allinfo->id;


    $data['rows'] = DB::table('allinfos')->where('id',$id)->get();
    
        return view('admin/allinfo.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\allinfo  $allinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, allinfo $allinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\allinfo  $allinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(allinfo $allinfo)
    {
        $allinfo->delete();
        return redirect()->back();
    }




    public function alldata($title)
    {
  

     $count = DB::table('allinfos')->where('title',$title)->count();
     if($count>0){
        $data = DB::table('allinfos')->where('title',$title)->get();

     echo  $data['0']->id;
     echo ',,,';     
     
     echo  $data['0']->infoid;
     echo ',,,';           

    
     echo  $data['0']->short_description;
     echo ',,,';           

    
     echo  $data['0']->description;
     echo ',,,';           

     
     echo  $data['0']->image;
     echo ',,,';           
 
     }else{
         echo 0 ;
     }
     
 


    }




}
