<?php

namespace App\Http\Controllers;
use App\Models\committee;
use App\Models\member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\gallery;
class frontendController extends Controller
{

    public function index()
    {
$wht=[
    'page'=>'Home',
    'position'=>'top',
];
$whb=[
    'page'=>'Home',
    'position'=>'Bottom',
];

$data['adtop'] =   DB::table('ads')->where($wht)->get();
$data['adbottom'] =   DB::table('ads')->where($whb)->get();

$data['brand'] =   DB::table('brandsliders')->orderBy('id','DESC')->get();
$data['main'] =   DB::table('mainsliders')->orderBy('id','DESC')->get();


        return view('index',$data);
    }

    public function about_us()
    {
$wht=[
    'page'=>'About-us',
    'position'=>'top',
];
$whb=[
    'page'=>'About-us',
    'position'=>'Bottom',
];
$whl=[
    'page'=>'About-us',
    'position'=>'Left',
];
$whr=[
    'page'=>'About-us',
    'position'=>'Right',
];

$data['adtop'] =   DB::table('ads')->where($wht)->get();
$data['adbottom'] =   DB::table('ads')->where($whb)->get();
$data['adl'] =   DB::table('ads')->where($whl)->get();
$data['adr'] =   DB::table('ads')->where($whr)->get();


        return view('aboutus',$data);
    }

    public function contact()
    {
$wht=[
    'page'=>'Contact',
    'position'=>'top',
];
$whb=[
    'page'=>'Contact',
    'position'=>'Bottom',
];
$whl=[
    'page'=>'Contact',
    'position'=>'Left',
];
$whr=[
    'page'=>'Contact',
    'position'=>'Right',
];

$data['adtop'] =   DB::table('ads')->where($wht)->get();
$data['adbottom'] =   DB::table('ads')->where($whb)->get();
$data['adl'] =   DB::table('ads')->where($whl)->get();
$data['adr'] =   DB::table('ads')->where($whr)->get();


        return view('contact',$data);
    }

    public function register_gide()
    {

$whb=[
    'page'=>'Registration Guideline',
    'position'=>'Bottom',
];
$whl=[
    'page'=>'Registration Guideline',
    'position'=>'Left',
];
$whr=[
    'page'=>'Registration Guideline',
    'position'=>'Right',
];

$data['adbottom'] =   DB::table('ads')->where($whb)->get();
$data['adl'] =   DB::table('ads')->where($whl)->get();
$data['adr'] =   DB::table('ads')->where($whr)->get();


        return view('register_gide',$data);
    }

   public function member()
   {


 
    $whl=[
        'page'=>'Member',
        'position'=>'Left',
    ];
  
    

    $data['adl'] =   DB::table('ads')->where($whl)->get();




    $data['rows'] = member::orderBy('id','DESC')
    ->get();

     return view('member',$data);
   } 

   public function Committee()
   {



    $wht=[
        'page'=>'Central Committee',
        'position'=>'top',
    ];
    $whb=[
        'page'=>'Central Committee',
        'position'=>'Bottom',
    ];
    $whl=[
        'page'=>'Central Committee',
        'position'=>'Left',
    ];
    $whr=[
        'page'=>'Central Committee',
        'position'=>'Right',
    ];
    
    $data['adtop'] =   DB::table('ads')->where($wht)->get();
    $data['adbottom'] =   DB::table('ads')->where($whb)->get();
    $data['adl'] =   DB::table('ads')->where($whl)->get();
    $data['adr'] =   DB::table('ads')->where($whr)->get();
    





    $data['rows'] = committee::orderBy('id','DESC')
    ->get();

     return view('committee',$data);
   } 

   public function Gallery()
   {



  
    $whb=[
        'page'=>'Gallery',
        'position'=>'Bottom',
    ];
    $whl=[
        'page'=>'Gallery',
        'position'=>'Left',
    ];
  
    

    $data['adbottom'] =   DB::table('ads')->where($whb)->get();
    $data['adl'] =   DB::table('ads')->where($whl)->get();





    $data['rows'] = gallery::orderBy('id','DESC')
    ->get();

    return view('gallery',$data);
   } 

   public function info_details($title)
   {
    $count = DB::table('allinfos')->where('title',$title)->count();
    if($count>0){
       $data['infoDetails'] = DB::table('allinfos')->where('title',$title)->get();

         return view('infodetails',$data);

    }else{
      return redirect()->back();
    }

 
   } 


    public function register()
    {



        $whl=[
            'page'=>'Registration',
            'position'=>'Left',
        ];
      
        
    
 
        $data['adl'] =   DB::table('ads')->where($whl)->get();




        $Table =  DB::getSchemaBuilder()->getColumnListing('members');
        $row = [];
        foreach ($Table as $rowname) {
            $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;

         return view('register',$data);
    }

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
            }else if($key=='status'){
                $data[$key] = 'Pending';
            } else {
                $data[$key] = $value;
            }
        }
        if ($id == '') {
            DB::table('members')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('member.form'));
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('members')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('member.form'));
        }






    }

}
