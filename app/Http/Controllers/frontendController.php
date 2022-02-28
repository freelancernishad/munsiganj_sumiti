<?php
namespace App\Http\Controllers;
use App\Models\committee;
use App\Models\member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\gallery;
use App\Models\District;
use App\Models\Thana;
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
        return view('index', $data);
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




        return view('register_gide', $data);
    }
    public function member()
    {
        $whl = [
            'page' => 'Member',
            'position' => 'Left',
        ];
        $data['adl'] =   DB::table('ads')->where($whl)->get();
        $data['rows'] = member::orderBy('id', 'DESC')->get();
        $data['districts'] = District::orderBy('bn_name', 'ASC')->get();
        $data['Thana'] = Thana::orderBy('bn_name', 'ASC')->get();




        $data['memberName'] = '';
        $data['memberId'] = '';



        $data['district'] = '';
        $data['upszila'] = '';

        return view('member', $data);
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
        $data['rows'] = committee::orderBy('id', 'DESC')
            ->get();
        return view('committee', $data);
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
        $data['rows'] = gallery::orderBy('id', 'DESC')
            ->get();
        return view('gallery', $data);
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
    public function register()
    {
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

        return view('register', $data);
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
            } else if ($key == 'status') {
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




    public function memberList_submit(Request $r)
    {
        // $district = $r->district;
        $upszila = $r->upszila;


        $memberId = $r->memberId;
        $memberName = $r->memberName;

        $member = $memberId;


        if($memberId==''){
            $member = $memberName;
        }else{
            $member = $memberId;

        }



        return redirect("member/".$member.'/'.$upszila);
    }



    public function member_search($name,$upszila)
    {
        $whl = [
            'page' => 'Member',
            'position' => 'Left',
        ];
        $data['adl'] =   DB::table('ads')->where($whl)->get();



        $wh1 = [
            'pr_thana'=>$upszila,
            'memberId'=>$name,
        ];
        $wh2 = [
            'pr_thana'=>$upszila,
            'name'=>$name,
        ];

        $namess= '';
        $memberIdss= '';

         $count1 = member::where($wh1)->count();

        $count2 = member::where($wh2)->count();


            if($count1>0){
                $data['rows'] = member::where($wh1)
                ->orderBy('id', 'DESC')->get();

                $memberIdss= $name;

            }else if($count2>0){
                $data['rows'] = member::where($wh2)
                ->orderBy('id', 'DESC')->get();

                $namess= $name;

            }else{
                $data['rows'] = member::where($wh2)
                ->orderBy('id', 'DESC')->get();
            }


        $data['Thana'] = Thana::orderBy('bn_name', 'ASC')->get();


        $upszila = Thana::where('bn_name',$upszila)->get();


        $data['memberName'] = $namess;
        $data['memberId'] = $memberIdss;

        $data['district'] ='';
        $data['upszila'] = $upszila[0]->id;

        return view('member', $data);
    }


}
