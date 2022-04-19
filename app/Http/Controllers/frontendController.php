<?php
namespace App\Http\Controllers;
use App\Models\committee;
use App\Models\member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\gallery;
use App\Models\District;
use App\Models\Thana;
use App\Models\blog;
use App\Models\BlogComment;
use App\Models\PostRead;
use App\Models\ProminentPersons;
use App\Models\MemberShipPament;
use App\Models\GlobalCommittee;
use App\Models\historyPlace;
use App\Models\historyCategory;
use App\Models\Parliamentary_Person;

use App\Models\GalleryCategory;
class frontendController extends Controller
{
    public function index()
    {
        $wht = [
            'page' => 'Home',
            'position' => 'top',
        ];
        $whb = [
            'page' => 'Home',
            'position' => 'Bottom',
        ];
        $data['adtop'] =   DB::table('ads')->where($wht)->get();
        $data['adbottom'] =   DB::table('ads')->where($whb)->get();
        $data['brand'] =   DB::table('brandsliders')->orderBy('id', 'DESC')->get();
        $data['main'] =   DB::table('mainsliders')->orderBy('id', 'DESC')->get();
        $latest4 = blog::orderBy('id', 'desc')->take(4)->get();

        $data['memberCount'] = member::where('status','Active')->count();
        $data['membercommittee'] = committee::count();
        $data['memberGlobalCommittee'] = GlobalCommittee::count();
        $data['committee'] = committee::orderBy('id', 'ASC')->take(2)->get();;




        return view('index', $data,compact('latest4'));
    }
    public function about_us()
    {
        $wht = [
            'page' => 'About-us',
            'position' => 'top',
        ];
        $whb = [
            'page' => 'About-us',
            'position' => 'Bottom',
        ];
        $whl = [
            'page' => 'About-us',
            'position' => 'Left',
        ];
        $whr = [
            'page' => 'About-us',
            'position' => 'Right',
        ];
        $data['adtop'] =   DB::table('ads')->where($wht)->get();
        $data['adbottom'] =   DB::table('ads')->where($whb)->get();
        $data['adl'] =   DB::table('ads')->where($whl)->get();
        $data['adr'] =   DB::table('ads')->where($whr)->get();
        return view('aboutus', $data);
    }
    public function contact()
    {
        $wht = [
            'page' => 'Contact',
            'position' => 'top',
        ];
        $whb = [
            'page' => 'Contact',
            'position' => 'Bottom',
        ];
        $whl = [
            'page' => 'Contact',
            'position' => 'Left',
        ];
        $whr = [
            'page' => 'Contact',
            'position' => 'Right',
        ];
        $data['adtop'] =   DB::table('ads')->where($wht)->get();
        $data['adbottom'] =   DB::table('ads')->where($whb)->get();
        $data['adl'] =   DB::table('ads')->where($whl)->get();
        $data['adr'] =   DB::table('ads')->where($whr)->get();
        return view('contact', $data);
    }
    public function register_gide()
    {
        $whb = [
            'page' => 'Registration Guideline',
            'position' => 'Bottom',
        ];
        $whl = [
            'page' => 'Registration Guideline',
            'position' => 'Left',
        ];
        $whr = [
            'page' => 'Registration Guideline',
            'position' => 'Right',
        ];
        $data['adbottom'] =   DB::table('ads')->where($whb)->get();
        $data['adl'] =   DB::table('ads')->where($whl)->get();
        $data['adr'] =   DB::table('ads')->where($whr)->get();
        $data['registration_guidelines'] =   DB::table('registration_guidelines')->get();




        return view('register_gide', $data);
    }


    public function refdata(Request $request)
    {
        $id = $request->id;
        if($id==''){
            echo "<h4 style='color:red'>No Data Found!</h4>";
        }else{
               $data =  member::where('memberId',$id)->get();



        echo "
            <h6 style='margin-top:10px' > <b> Name </b> : ".$data[0]->name." </h5>
            <h6 style='margin-top:10px' > <b> Father Name</b> : ".$data[0]->father_name." </h5>
            <h6 style='margin-top:10px' > <b> Address </b> : ".$data[0]->Present_address." </h5>


        ";
        }


    }



    public function member(Request $request)
    {







        $whl = [
            'page' => 'Member',
            'position' => 'Left',
        ];
        $data['adl'] =   DB::table('ads')->where($whl)->get();
        $data['rows'] = member::where('status','Active')->orderBy('id', 'DESC')->get();
        $data['districts'] = District::orderBy('bn_name', 'ASC')->get();
        $data['Thana'] = Thana::orderBy('bn_name', 'ASC')->get();




        $data['memberName'] = '';
        $data['memberId'] = '';



        $data['district'] = '';
        $data['upszila'] = '';

        if($request->Blode!=''){
            $data['rows'] = member::where(['status'=>'Active','blood_group'=>$request->Blode])->orderBy('id', 'DESC')->get();
        }





         $memberid = $request->memberid;
if($memberid==''){
    $data['totalcount'] = '';
    return view('member', $data);
}else{

    $data['single'] = member::where('memberId', $memberid)->get();

    return view('membersingle', $data);
}



    }


    public function blood(Request $request)
    {







        $whl = [
            'page' => 'Member',
            'position' => 'Left',
        ];
        $data['adl'] =   DB::table('ads')->where($whl)->get();
        $data['rows'] = member::where('status','Active')->orderBy('id', 'DESC')->get();
        $data['districts'] = District::orderBy('bn_name', 'ASC')->get();
        $data['Thana'] = Thana::orderBy('bn_name', 'ASC')->get();




        $data['memberName'] = '';
        $data['memberId'] = '';



        $data['district'] = '';
        $data['upszila'] = '';

        if($request->Blode!=''){
            $data['rows'] = member::where(['status'=>'Active','blood_group'=>$request->Blode])->orderBy('id', 'DESC')->get();

    $data['totalcount'] = member::where(['status'=>'Active','blood_group'=>$request->Blode])->count();
        }else {

    $data['totalcount'] = '';
}




         $memberid = $request->memberid;
if($memberid==''){




    return view('blood', $data);
}else{

    $data['single'] = member::where('memberId', $memberid)->get();

    return view('membersingle', $data);
}



    }




    public function Committee()
    {
        $wht = [
            'page' => 'Central Committee',
            'position' => 'top',
        ];
        $whb = [
            'page' => 'Central Committee',
            'position' => 'Bottom',
        ];
        $whl = [
            'page' => 'Central Committee',
            'position' => 'Left',
        ];
        $whr = [
            'page' => 'Central Committee',
            'position' => 'Right',
        ];
        $data['adtop'] =   DB::table('ads')->where($wht)->get();
        $data['adbottom'] =   DB::table('ads')->where($whb)->get();
        $data['adl'] =   DB::table('ads')->where($whl)->get();
        $data['adr'] =   DB::table('ads')->where($whr)->get();

        $curentyear = date('Y');
        $previousyear = $curentyear-1;



        $data['rows'] = committee::orderBy('id', 'ASC')->where('status','active')
            ->get();



        $data['type'] = '';





        return view('committee', $data);
    }




    public function ExCommittee(Request $request)
    {
        $wht = [
            'page' => 'Central Committee',
            'position' => 'top',
        ];
        $whb = [
            'page' => 'Central Committee',
            'position' => 'Bottom',
        ];
        $whl = [
            'page' => 'Central Committee',
            'position' => 'Left',
        ];
        $whr = [
            'page' => 'Central Committee',
            'position' => 'Right',
        ];
        $data['adtop'] =   DB::table('ads')->where($wht)->get();
        $data['adbottom'] =   DB::table('ads')->where($whb)->get();
        $data['adl'] =   DB::table('ads')->where($whl)->get();
        $data['adr'] =   DB::table('ads')->where($whr)->get();


        $curentyear = date('Y');
        $previousyear = $curentyear-1;

        $wh = [
            'session_start','!=',$previousyear,
            'session_end','!=',$curentyear,
         ];


         $session = $request->session;

         if($session!=''){
            $sessionlast = $request->session;
         }else{

            $count = committee::orderBy('session_start', 'DESC')->where('status','ex')->count();
            if($count>0){
                $dataget = committee::orderBy('session_start', 'DESC')->where('status','ex')->get();

                $sessionlast = $dataget[0]->session_start;
            }else{

                $sessionlast = '';
            }

         }



         if($session!=''){
            $sessionlast = $request->session;
             $data['rows'] = committee::orderBy('id', 'ASC')->where(['status'=>'ex','session_start'=>$sessionlast])->get();
             $data['type'] = 'exs';
         }else{

             $countdist = committee::orderBy('id', 'DESC')->where(['status'=>'ex'])->count();
            if($countdist>0){

                $data['rows'] = committee::orderBy('id', 'DESC')->select('session_start')->distinct()->where(['status'=>'ex'])->get();
            }else{
                $data['rows'] = committee::orderBy('id', 'DESC')->where(['status'=>'ex'])->get();

            }
            $data['type'] = 'ex';
         }





            $data['session'] = $sessionlast;

            $data['years'] = committee::orderBy('session_start', 'DESC')->where('status','ex')->select('session_start')->distinct()
            ->get();




        return view('committee', $data);
    }



    public function golobalCommittee(Request $request)
    {
        $wht = [
            'page' => 'Central Committee',
            'position' => 'top',
        ];
        $whb = [
            'page' => 'Central Committee',
            'position' => 'Bottom',
        ];
        $whl = [
            'page' => 'Central Committee',
            'position' => 'Left',
        ];
        $whr = [
            'page' => 'Central Committee',
            'position' => 'Right',
        ];
        $data['adtop'] =   DB::table('ads')->where($wht)->get();
        $data['adbottom'] =   DB::table('ads')->where($whb)->get();
        $data['adl'] =   DB::table('ads')->where($whl)->get();
        $data['adr'] =   DB::table('ads')->where($whr)->get();
        $data['rows'] = committee::orderBy('id', 'ASC')->get();

        $data['country'] = GlobalCommittee::distinct()->select('country')->get();

        if($request->view==''){
            return view('golobalCommittee', $data);
        }else{

            $data['rowsingle'] = GlobalCommittee::where('id',$request->view)->get();

            return view('golobalCommitteeView', $data);
        }





    }




    public function Gallery()
    {
        $whb = [
            'page' => 'Gallery',
            'position' => 'Bottom',
        ];
        $whl = [
            'page' => 'Gallery',
            'position' => 'Left',
        ];
        $data['adbottom'] =   DB::table('ads')->where($whb)->get();
        $data['adl'] =   DB::table('ads')->where($whl)->get();
        $data['rows'] = gallery::orderBy('id', 'DESC')->get();
        $data['category'] = GalleryCategory::orderBy('id', 'DESC')->get();
        return view('gallery', $data);
    }
    public function HistoricalPlace(Request $request)
    {

        $singleData =  $request->i;
        $data['singleData'] = $singleData;
        if($singleData!=''){
            $data['rows'] = historyPlace::where('id',$singleData)->get();
        }
        $data['rowsrel'] = historyCategory::where('parent','ঐতিহাসিক ধর্মীয় স্থাপনা সমূহ')->orderBy('id','ASC')->get();
        $data['rowshis'] = historyCategory::where('parent','ঐতিহাসিক স্থাপনা ও স্থান সমূহ')->orderBy('id','ASC')->get();

            return view('HistoricalPlace',$data);

    }

        public function ProminentPersons(Request $request)
    {

        $singleData =  $request->i;
        $data['singleData'] = $singleData;
        if($singleData!=''){
            $data['rows'] = ProminentPersons::where('id',$singleData)->get();
        }
        $data['rowsMale'] = ProminentPersons::where('category','বিক্রামপুরের ব্যক্তিত্ব')->orderBy('id','ASC')->get();
        $data['rowsFemale'] = ProminentPersons::where('category','বিক্রামপরের নারী ব্যক্তিত্ব')->orderBy('id','ASC')->get();

            return view('ProminentPersons',$data);

    }

        public function ParliamentaryPersons(Request $request)
    {

        $singleData =  $request->i;
        $data['singleData'] = $singleData;
        if($singleData!=''){
            $data['rows'] = Parliamentary_Person::where('id',$singleData)->get();
        }
        $data['rowsMale'] = Parliamentary_Person::where('category','Parliamentary Persons (Male)')->orderBy('id','ASC')->get();
        $data['rowsFemale'] = Parliamentary_Person::where('category','Parliamentary Persons (Female)')->orderBy('id','ASC')->get();

            return view('Parliamentary_Person',$data);

    }



    public function info_details($title)
    {
        $count = DB::table('allinfos')->where('title', $title)->count();
        if ($count > 0) {
            $data['infoDetails'] = DB::table('allinfos')->where('title', $title)->get();
            return view('infodetails', $data);
        } else {
            return redirect()->back();
        }
    }

    public function blogs(Request $r)
    {
        $post = '';
        $cate = '';
        if (isset($r->search)) {
            $post =  $r->search;
            $cate = 'search';
        }
        $data['post'] = $post;
        $data['cate'] = $cate;
        $data['categories'] = DB::table('categories')->orderBy('name', 'ASC')->get();
        // $data['posts'] = DB::table('blogs')->orderBy('id','DESC')->get();
        $data['settings'] = DB::table('settings')->get();
        return view('News.index', $data);
    }
    public function blogs_category($category)
    {
        $data['categories'] = DB::table('categories')->orderBy('name', 'ASC')->get();
        // $data['posts'] = DB::table('blogs')->where('category',$category)->orderBy('id','DESC')->get();
        $data['post'] = $category;
        $data['cate'] = 'category';
        return view('blogs', $data);
    }
    public function blogs_single($id)
    {
        $data['posts'] = DB::table('blogs')->where('id', $id)->get();
        return view('singleBlog', $data);
    }




    public function register(Request $request)
    {





        $step = $request->step;

if($step==''){
    $data['step'] = 1;
}else{

    $data['step'] = $request->step;
    $data['id'] = $request->id;

    if($step==2 || $step==3){
        $insert = DB::table('members')->where('id',$request->id)->first();
        //   print_r($insert);
          $Pending = $insert->status;
if($Pending=='Active'){


    return redirect("/register")->with(["icon" => "error","iconstatus" => "failed","msg" => "You are already an active member"]);
}elseif($Pending=='Pending'){


    return redirect("/register")->with(["icon" => "error","iconstatus" => "failed","msg" => "You are already Registered.Wait for Active"]);
}


    }

}


        $whl = [
            'page' => 'Registration',
            'position' => 'Left',
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

        $data['districts'] = District::orderBy('bn_name', 'ASC')->get();
$member = member::where('status','Active')->get();
        return view('register', $data,compact('member'));
    }

    public function store(Request $request)
    {
        // echo'<pre>';
        // print_r($request->all());
        // return $request->all();
        $id = $request->id;
        $step = $request->step;
        $status = $request->status;



if($step==4){

    $secretKey = env('GOOGLE_CAPTCHA_SECRETEKEY');
    $ip = $_SERVER['REMOTE_ADDR'];
   $response = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$ip";
     $fire =  file_get_contents($url);
     $data = json_decode($fire);


     if($data->success==1){

        $data = [];
        $inputData = $request->all();
        foreach ($inputData as $key => $value) {
            if ($key == 'id' || $key == '_token' || $key == 'status' || $key == 'g-recaptcha-response' || $key == 'Slip_Upload') {
             } else {
                $data[$key] = $value;
            }
        }
        $datas['updated_at'] = date("Y-m-d H:i:s");
    $datas['status'] = 'Pending';
        DB::table('members')->where('id', $id)->update($datas);


		if($request->hasfile('Slip_Upload'))	{
			$image = $request->file('Slip_Upload');
		$imageext = $image->extension();
		$imagefile=time().'.'.$imageext;

		$image->storeAs('/public/bankSlip/',$imagefile);
			$data['Slip_Upload']=$imagefile;
		}



        MemberShipPament::create($data);


         return redirect("/register")->with(["icon" => "success","iconstatus" => "Success","msg" => "Registration successfully completed!Please wait for President and Secretary aproval"]);
     }else{

        return redirect()->back()->with(["icon" => "error","iconstatus" => "Error","msg" => "Please check captcha"]);
     }

    //  echo'<pre>';
    //     print_r($request->all());
}else{



        $data = [];
        $inputData = $request->all();
        foreach ($inputData as $key => $value) {
            if ($key == 'id' || $key == '_token' || $key == 'step') {
             } else {
                $data[$key] = $value;
            }
        }
        if ($id == '') {
           DB::table('members')->insert($data);
            $insert = DB::table('members')->latest('id')->first();
         $insertid = $insert->id;
            return redirect("/register?step=$step&id=$insertid");
        } else {
            $data['updated_at'] = date("Y-m-d H:i:s");
            DB::table('members')->where('id', $id)->update($data);
            // $request->session()->flash('msg', 'Data Updated Succcessfully');
            $insert = DB::table('members')->latest('id')->first();
            //   print_r($insert);
            $insertid = $insert->id;
            return redirect("/register?step=$step&id=$insertid");
        }


    }


    }




    public function memberList_submit(Request $r)
    {

       // dd($r->all());
        // $district = $r->district;
        $upszila = $r->upszila;


        $memberId = $r->memberId;
        $memberName = $r->memberName;

        $member = $memberId;


        //  if($memberName!=''){
        //     // $member = $memberId;

        //     return redirect("member/".$memberName.'/'.$upszila);
        // }


        if($memberName!=''){


            return redirect("member/".$memberName.'/single');
            // $member = $memberName;
        }

        if($memberId!=''){


            return redirect("member/".$memberId.'/single');
            // $member = $memberName;
        }


        if($upszila!=''){


            return redirect("member/".$upszila.'/single');
            // $member = $memberName;
        }




    }



    public function member_search($name,$upszila)
    {
        $whl = [
            'page' => 'Member',
            'position' => 'Left',
        ];
        $data['adl'] =   DB::table('ads')->where($whl)->get();


            $wh1 = [
                'memberId'=>$name,
                'status'=>'Active',

            ];


            $namess= '';
            $memberIdss= '';

              $count1 = member::where($wh1)->count();




            $wh2 = [
                // 'pr_thana'=>$upszila,
                'pr_thana'=>$name,
                'status'=>'Active',
            ];
            $count2 = member::where($wh2)->count();




            $wh3 = [
                'name'=>$name,
                'status'=>'Active',
            ];
            $count3 = member::where($wh3)->count();











            if($count1>0){
                $data['rows'] = member::where($wh1)
                ->orderBy('id', 'DESC')->get();

                $memberIdss= $name;
                $data['totalcount'] = member::where($wh1)->count();
            }else if($count2>0){
                $data['rows'] = member::where($wh2)
                ->orderBy('id', 'DESC')->get();

                $upszilass= $name;
                $data['totalcount'] = member::where($wh2)->count();
            }else if($count3>0){
                $data['rows'] = member::where($wh3)
                ->orderBy('id', 'DESC')->get();

                $namess= $name;
                $data['totalcount'] = member::where($wh3)->count();
            }else{
                $data['rows'] = member::where($wh2)
                ->orderBy('id', 'DESC')->get();
                $data['totalcount'] = member::where($wh2)->count();
            }


        $data['Thana'] = Thana::orderBy('name', 'ASC')->get();


        $count = Thana::where('name',$name)->count();
        if($count>0){

            $upszila = Thana::where('name',$name)->get();
            $data['upszila'] = $upszila[0]->id;
        }else{
            $data['upszila'] = '';

        }


        $data['memberName'] = $namess;
        $data['memberId'] = $memberIdss;

        $data['district'] ='';


        return view('member', $data);
    }









    function getdata()
    {

        $str ="INSERT INTO `committees` (`committeeId`, `name`, `age`, `dob`, `father_name`, `education`, `occupation`, `bio`, `pr_vill`, `pr_post`, `pr_thana`, `pr_dist`, `p_vill`, `p_post`, `p_thana`, `p_dist`, `phoneNumber`, `email`, `website`, `pesahgot_address`, `samagik_unoyon`, `hobby`, `image`, `status`, `created_at`, `updated_at`) VALUES";


          $alldata = DB::table('committees')->get();

            foreach($alldata as $row){


                $id = $row->id;
                $committeeId = $row->committeeId;
                $name = $row->name;
                $age = $row->age;
                $dob = $row->dob;
                $father_name = $row->father_name;
                $education = $row->education;
                $occupation = $row->occupation;
                $bio = $row->bio;
                $pr_vill = $row->pr_vill;
                $pr_post = $row->pr_post;
                $pr_thana = $row->pr_thana;
                $pr_dist = $row->pr_dist;
                $p_vill = $row->p_vill;
                $p_post = $row->p_post;
                $p_thana = $row->p_thana;
                $p_dist = $row->p_dist;
                $phoneNumber = $row->phoneNumber;
                $email = $row->email;
                $website = $row->website;
                $pesahgot_address = $row->pesahgot_address;
                $samagik_unoyon = $row->samagik_unoyon;
                $hobby = $row->hobby;

                $status = $row->status;
                $created_at = $row->created_at;
                $updated_at = $row->updated_at;


                $arrayFile  = $row->image;
                if($arrayFile!=''){


                $StudentID  = $row->StudentID;
                $imaagedata =  explode(',',$arrayFile);
                $imaagedata = $imaagedata[1];

                $imaagedata = base64_decode($imaagedata);
                $NewsImage ="$id.jpg";
                $im = imagecreatefromstring($imaagedata);
                if ($im !== false) {
                header('Content-Type: image/png');
                // imagepng($im);
                // $path = asset('images');
                imagejpeg($im,"images/".$NewsImage,80);


                //imagedestroy($im);
                }
                else {
                //echo 'An error occurred.';
                }
            }


                $str .="('$committeeId', '$name', '$age', '$dob', '$father_name', '$education', '$occupation', '$bio', '$pr_vill', '$pr_post', '$pr_thana', '$pr_dist', '$p_vill', '$p_post', '$p_thana', '$p_dist', '$phoneNumber', '$email', '$website', '$pesahgot_address', '$samagik_unoyon', '$hobby', '$NewsImage', '$status', '$created_at', '$updated_at'),";
            }





            $handle = fopen('students.sql','w+');
            fwrite($handle,$str);
            fclose($handle);





    }








}
