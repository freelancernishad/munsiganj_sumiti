<?php

namespace App\Http\Controllers;
use App\Models\District;
use App\Models\Thana;
use App\Models\Union;
use Illuminate\Http\Request;

class countryApiController extends Controller
{
    public function getdistrict(Request $r)
    {
         $id =  $r->input('id');


 echo $data = District::where('division_id',$id)->get();

    }

    public function getthana(Request $r)
    {
        $id =  $r->input('id');

        $District = District::where('id',$id)->get();
echo $District[0]->name;
echo ',,,';

 echo $data = Thana::where('district_id',$id)->get();

    }


    public function getunioun(Request $r)
    {
        $id =  $r->input('id');

        $Thana = Thana::where('id',$id)->get();
echo $Thana[0]->name;
echo ',,,';

 echo $data = Union::where('upazila_id',$id)->get();

    }

    public function gotoUnion(Request $r)
    {



         $name =  $r->input('id');
        $Union = Union::where('id',$name)->get();
 echo $Union[0]->name;
    }
}
