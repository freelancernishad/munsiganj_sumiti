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
 echo $data = Thana::where('district_id',$id)->get();

    }
  
    
    public function getunioun(Request $r)
    {
        $id =  $r->input('id');
 echo $data = Union::where('upazila_id',$id)->get();

    }
    
    public function gotoUnion(Request $r)
    {
        $name =  $r->input('id');
if($name=='Banglabandha'){
    echo 'http://www.banglabanda.localhost:8000/';

}else if($name=='Bhojoanpur'){
    echo 'http://www.bhojoanpur.localhost:8000/';
}else if($name=='Buraburi'){
    echo 'http://www.buraburi.localhost:8000/';
}else if($name=='Debnagar'){
    echo 'http://www.debnagar.localhost:8000/';
}else if($name=='Salbahan'){
    echo 'http://www.salbahan.localhost:8000/';
}else if($name=='Tentulia'){
    echo 'http://www.tetulia.localhost:8000/';
}else if($name=='Timaihat'){
    echo 'http://www.tirnaihat.localhost:8000/';
}else{
    echo 0;
}

    }
}
