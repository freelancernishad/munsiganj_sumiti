<?php

namespace App\Http\Controllers;

use App\Models\RegistrationGuideline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationGuidelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



            $count = DB::table('registration_guidelines')->count();
        if($count>0){
            $data['rows'] = DB::table('registration_guidelines')->get();


        }else{
        $Table =  DB::getSchemaBuilder()->getColumnListing('registration_guidelines');
            $row = [];
            foreach ($Table as $rowname) {
                $row[$rowname] = '';
            };
            $rows[] = $row;
            $object = json_decode(json_encode($rows));
            $data['rows'] = $object;

        }
        return view('admin/registration_guidelines.add', $data);



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

            //                      echo'<pre>';
            //          print_r($request->all());
            // die();

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
                DB::table('registration_guidelines')->insert($data);
                $request->session()->flash('msg', 'Data Inserted Succcessfully');
                return redirect(route('RegistrationGuideline.index'));
            } else {

            $data['updated_at'] = date("Y-m-d H:i:s");

                DB::table('registration_guidelines')->where('id', $id)->update($data);
                $request->session()->flash('msg', 'Data Updated Succcessfully');
                return redirect(route('RegistrationGuideline.index'));
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrationGuideline  $registrationGuideline
     * @return \Illuminate\Http\Response
     */
    public function show(RegistrationGuideline $registrationGuideline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistrationGuideline  $registrationGuideline
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistrationGuideline $registrationGuideline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistrationGuideline  $registrationGuideline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistrationGuideline $registrationGuideline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrationGuideline  $registrationGuideline
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrationGuideline $registrationGuideline)
    {
        //
    }
}
