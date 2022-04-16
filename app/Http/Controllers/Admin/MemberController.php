<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\member;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\District;
use App\Models\Thana;
use Illuminate\Support\Str;
use App\Models\MemberShipPament;
use App\Exports\MembersExport;
use Maatwebsite\Excel\Facades\Excel;
class MemberController extends Controller
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

    public function excel()
    {

        return Excel::download(new MembersExport, 'Members.xlsx');
    }


    public function index(Request $request)
    {

        $status = $request->status;

$data['status'] = $status;

        if($status==''){
            return redirect('/admin/members?status=active');
        }else{
            if($status=='active'){
                $data['rows'] = member::where('status','Active')->orderBy('id','DESC')->get();
            }elseif($status=='pending'){
                $data['rows'] = member::where('status','Pending')->orderBy('id','DESC')->get();
            }elseif($status=='unpaid'){
                $data['rows'] = member::where('status','Unpaid')->orderBy('id','DESC')->get();
            }elseif($status=='approve'){


                member::where('id',$request->id)->update(['status'=>'Active']);
                return redirect()->back();

            }
elseif($status=='trxView'){


    $count = MemberShipPament::where('memberid',$request->id)->count();
if($count>0){
    $data['rows'] = MemberShipPament::where('memberid',$request->id)->orderBy('id','DESC')->get();
    return view('admin/members.trx',$data);
}else{
    return '<h1 style="text-align:center;color:red" >No Transition Found</h1>';
}


            }


        }







        return view('admin/members.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
       // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(10000, 99999)
            . $characters[rand(0, strlen($characters) - 1)];

        // shuffle the result
        $string = str_shuffle($pin);


        $data['datas'] = Division::all();
        $Table =  DB::getSchemaBuilder()->getColumnListing('members');
        $row = [];
        foreach ($Table as $rowname) {

            if($rowname=='memberId'){
                $row[$rowname] = $string;
            }else{
                $row[$rowname] = '';
            }



        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;
        $data['districts'] = District::orderBy('bn_name', 'ASC')->get();
        $member = member::where('status','Active')->get();
        return view('admin/members.add', $data,compact('member'));

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
            if ($key == 'id' || $key == '_token' || $key == 'image') {
            } else {
                $data[$key] = $value;
            }
        }




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
            $data['status'] = 'Active';

            DB::table('members')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('members.index'));
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('members')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('members.index'));
        }






    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(member $member)
    {


    $id = $member->id;

    $data['districts'] = District::orderBy('bn_name', 'ASC')->get();
    $data['rows'] = DB::table('members')->where('id',$id)->get();
    $data['datas'] = Division::all();
        return view('admin/members.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(member $member)
    {
        $member->delete();
        return redirect()->back();
    }
}
