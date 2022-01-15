<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Brandslider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BrandsliderController extends Controller
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
      
        $data['rows'] = brandslider::orderBy('id','DESC')
        ->get();

        return view('admin/brandslider.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Table =  DB::getSchemaBuilder()->getColumnListing('brandsliders');
        $row = [];
        foreach ($Table as $rowname) {
            $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;
     
        return view('admin/brandslider.add', $data);
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
            if ($key == 'id' || $key == '_token') {
            } else {
                $data[$key] = $value;
            }
        }
        if ($id == '') {
            DB::table('brandsliders')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('brandslider.index'));
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('brandsliders')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('brandslider.index'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brandslider  $brandslider
     * @return \Illuminate\Http\Response
     */
    public function show(Brandslider $brandslider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brandslider  $brandslider
     * @return \Illuminate\Http\Response
     */
    public function edit(Brandslider $brandslider)
    {
              
    $id = $brandslider->id;


    $data['rows'] = DB::table('brandsliders')->where('id',$id)->get();
    
        return view('admin/brandslider.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brandslider  $brandslider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brandslider $brandslider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brandslider  $brandslider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brandslider $brandslider)
    {
        $brandslider->delete();
        return redirect()->back();
    }
}
