<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\committee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\ExCommitteesExport;
use App\Exports\ActiveCommitteesExport;
use Maatwebsite\Excel\Facades\Excel;
class CommitteeController extends Controller
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


    public function active_committees()
    {

        return Excel::download(new ActiveCommitteesExport, 'Active_committees.xlsx');
    }


    public function ex_committees()
    {

        return Excel::download(new ExCommitteesExport, 'EX_committees.xlsx');
    }



    public function index(Request $request)
    {

      $data['type'] = $request->d;
      $type = $request->d;

      if($type==''){
        $data['rows'] = committee::orderBy('id','DESC')->where('status','active')
        ->get();
      }else{
        $data['rows'] = committee::orderBy('id','DESC')->where('status','ex')
        ->get();
      }






        return view('admin/committee.list',$data);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Table =  DB::getSchemaBuilder()->getColumnListing('committees');
        $row = [];
        foreach ($Table as $rowname) {
            $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;

        return view('admin/committee.add', $data);
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
        $status = $request->status;
        $data = [];
        $inputData = $request->all();
        foreach ($inputData as $key => $value) {
            if ($key == 'id' || $key == '_token' || $key == 'image' || $key == 'session_start') {
            } else {
                $data[$key] = $value;
            }
        }

$data['session_start'] = $request->session_start.'-'.$request->session_end;





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

        if ($id == '') {

            $data['status'] = 'active';

            DB::table('committees')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('committee.index'));
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('committees')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('committee.index'));
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function show(committee $committee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function edit(committee $committee)
    {

    $id = $committee->id;


    $data['rows'] = DB::table('committees')->where('id',$id)->get();

        return view('admin/committee.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, committee $committee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function destroy(committee $committee)
    {
        $committee->delete();
        return redirect()->back();
    }
}
