<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BlogController extends Controller
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

        $data['rows'] = blog::orderBy('id','DESC')
        ->get();

        return view('admin/blog.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['categoryList'] = DB::table('categories')->orderBy('id','DESC')->get();


        $Table =  DB::getSchemaBuilder()->getColumnListing('blogs');
        $row = [];
        foreach ($Table as $rowname) {
            $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;

        return view('admin/blog.add', $data);
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

            $random  = sprintf("%06d", mt_rand(1, 999999));
$data['postid'] = $random;
            DB::table('blogs')->insert($data);
            $request->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect(route('blog.index'));
        } else {

 $data['updated_at'] = date("Y-m-d H:i:s");

            DB::table('blogs')->where('id', $id)->update($data);
            $request->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect(route('blog.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        $data['categoryList'] = DB::table('categories')->orderBy('id','DESC')->get();

    $id = $blog->id;


    $data['rows'] = DB::table('blogs')->where('id',$id)->get();

        return view('admin/blog.add',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        $blog->delete();
        return redirect()->back();
    }
}
