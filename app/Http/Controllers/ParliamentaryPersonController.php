<?php

namespace App\Http\Controllers;

use App\Models\Parliamentary_Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ParliamentaryPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows'] = Parliamentary_Person::orderBy('id','DESC')->get();

        return view('admin/Parliamentary_Person.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Table =  DB::getSchemaBuilder()->getColumnListing('parliamentary__people');
        $row = [];
        foreach ($Table as $rowname) {
            if($rowname=='ps_history'){
                $row[$rowname] = json_encode([["Positon"=>"","Session_Start"=>"","Session_End"=>""]]);
            }else{

                $row[$rowname] = '';
            }
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;

        return view('admin/Parliamentary_Person.add', $data);
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


        $PositonCount = count($request->Positon);

        for($i=0;$i<$PositonCount;$i++){

            $array[$i] = [
                'Positon'=>$request->Positon[$i],
                'Session_Start'=>$request->Session_Start[$i],
                'Session_End'=>$request->Session_End[$i],
            ];
        }

     $ps_history = json_encode($array);



        // return $request->all();

        $id = $request->id;

        $data = [];
        $inputData = $request->all();
        foreach ($inputData as $key => $value) {
            if ($key == 'id' || $key == '_token' || $key == 'Positon' || $key == 'Session_Start' || $key == 'Session_End') {
            } else {
                $data[$key] = $value;
            }
        }

        $data['ps_history'] =$ps_history;


        $arrayFile =  $request->image;
        $imaagedata =  explode(',',$arrayFile);
        $coutnarray = count($imaagedata);
        if($coutnarray==2)	{
            $imaagedata = $imaagedata[1];
            $imageid = uniqid();
            $imaagedata = base64_decode($imaagedata);
            $NewsImage ="$imageid.jpg";
            $im = imagecreatefromstring($imaagedata);
            if ($im !== false) {
            header('Content-Type: image/png');
            // imagepng($im);
            // $path = asset('images');
            imagejpeg($im,"images/".$NewsImage,20);
            //imagedestroy($im);
            }
            else {
            echo 'An error occurred.';
            }
            $data['image'] = 'images/'.$NewsImage;

            }



            // return $data;



        if ($id == '') {
            DB::table('parliamentary__people')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('Parliamentary_Person.index'));
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('parliamentary__people')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('Parliamentary_Person.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parliamentary_Person  $parliamentary_Person
     * @return \Illuminate\Http\Response
     */
    public function show(Parliamentary_Person $parliamentary_Person,$id)
    {
        $data['rows'] = DB::table('parliamentary__people')->where('id',$id)->get();
        return view('admin/Parliamentary_Person.add',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parliamentary_Person  $parliamentary_Person
     * @return \Illuminate\Http\Response
     */
    public function edit(Parliamentary_Person $parliamentary_Person,$id)
    {
        $data['rows'] = DB::table('parliamentary__people')->where('id',$id)->get();
        return view('admin/Parliamentary_Person.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parliamentary_Person  $parliamentary_Person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parliamentary_Person $parliamentary_Person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parliamentary_Person  $parliamentary_Person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parliamentary_Person $parliamentary_Person,$id)
    {
        $parliamentary_Person = Parliamentary_Person::find($id);

        $parliamentary_Person->delete();
        return redirect()->back();
    }
}
