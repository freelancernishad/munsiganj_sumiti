<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SettingController extends Controller
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






        $count = DB::table('settings')->count();
if($count>0){
    $data['rows'] = DB::table('settings')->get();


}else{
       $Table =  DB::getSchemaBuilder()->getColumnListing('settings');
        $row = [];
        foreach ($Table as $rowname) {
            $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;

    }
    return view('admin/setting.add', $data);









    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Table =  DB::getSchemaBuilder()->getColumnListing('settings');
        $row = [];
        foreach ($Table as $rowname) {
            $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;

        return view('admin/setting.add', $data);
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
            if ($key == 'id' || $key == '_token' || $key == 'logo' || $key == 'files' || $key == 'Advertisement') {
            } else {
                $data[$key] = $value;
            }
        }


        if($request->hasfile('logo'))	{
         $image = $request->file('logo');
        $imagename = $image->getClientOriginalName();
        $imagefile= time().'_'.$imagename;

        $image->storeAs('/public/logo/',$imagefile);

$data['logo'] = $imagefile;
        }

        if($request->hasfile('Advertisement'))	{
         $image = $request->file('Advertisement');
        $imagename = $image->getClientOriginalName();
        $imagefile= time().'_'.$imagename;

        $image->storeAs('/public/logo/',$imagefile);

$data['Advertisement'] = $imagefile;
        }




        if ($id == '') {
            DB::table('settings')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('setting.index'));
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('settings')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('setting.index'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(setting $setting)
    {

    $id = $setting->id;


    $data['rows'] = DB::table('settings')->where('id',$id)->get();

        return view('admin/setting.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(setting $setting)
    {
        $setting->delete();
        return redirect()->back();
    }
}
