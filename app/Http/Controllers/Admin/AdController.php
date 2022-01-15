<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdController extends Controller
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
              
        $data['rows'] = ad::orderBy('id','DESC')
        ->get();

        return view('admin/ad.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Table =  DB::getSchemaBuilder()->getColumnListing('ads');
        $row = [];
        foreach ($Table as $rowname) {
            $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;
     
        return view('admin/ad.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //               echo'<pre>';
        // print_r($request->all());



 $imageCount = count($request->items);

        for($i=0;$i<$imageCount;$i++){

            if($request->hasfile('image'))	{
                $image = $request->file('image')[$i];
            $imagename = $image->getClientOriginalName();
  
            $imagefile= time().'_'.$imagename;

            $image->storeAs('/public/ad/',$imagefile);
            $images[$i]=[
                'name'=>$imagefile,
            ];

            }



                



        }
        if($request->hasfile('image'))	{

$images = json_encode($images);

        }
        $id = $request->id;
  
        $data = [];
        $inputData = $request->all();
        foreach ($inputData as $key => $value) {
            if ($key == 'id' || $key == '_token' || $key == 'items') {
            

            }else if($key == 'image'){

                if($request->hasfile('image'))	{

                $data[$key]=$images;
                }
            } else {
                $data[$key] = $value;
            }
        }

// print_r($data);
// die();



$wh=[
   'page'=> $request->page,
   'position'=> $request->position,
];
        $countdata = DB::table('ads')->where($wh)->count();


        if ($id == '') {


            if($countdata>0){
                $data['updated_at'] = date("Y-m-d H:i:s");
            
                DB::table('ads')->where('id', $id)->update($data);
                $request->session()->flash('msg', 'Data Updated Succcessfully');
                return redirect(route('ad.index'));
            }else{
                 DB::table('ads')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('ad.index'));
            }


           
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('ads')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('ad.index'));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show(ad $ad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(ad $ad)
    {
              
     $id = $ad->id;


    $data['rows'] = DB::table('ads')->where('id',$id)->get();
    
        return view('admin/ad.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ad $ad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(ad $ad)
    {
        $ad->delete();
        return redirect()->back();
    }
}
