<?php

use Illuminate\Support\Facades\DB;
// use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

function month_en_to_bn($month)
{

    $bn_month = array('জানুয়ারি', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগষ্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');
    $en_month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');


    return str_replace($en_month, $bn_month, $month);
}

function int_en_to_bn($number)
{

    $bn_digits = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
    $en_digits = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

    return str_replace($en_digits, $bn_digits, $number);
}



    function allcountry(){

        $filedata = file_get_contents('assets/by-code.json');
     return   $details = json_decode($filedata);



    }


    function allcountryflag($country){



        $filedata = file_get_contents('assets/by-code.json');
        $details = json_decode($filedata);



     foreach($details as $list=>$value){

if($country== $value->name){
    return $value->flag;
}


    }



    }


    function base64($Image)
    {
    //  return $Image;

        if(File::exists($Image)){

            $Image= $Image;
        }else{
            $Image= 'image.png';

        }

    $ext =  pathinfo($Image, PATHINFO_EXTENSION);;
        return $b64image = "data:image/$ext;base64,".base64_encode(file_get_contents($Image));
    }


    function settings(){

return DB::table('settings')->get();
    }



    function video(){
        return DB::table('videos')->orderBy('id', 'desc')->first();

    }


    function notices(){
        return DB::table('notices')->orderBy('id', 'desc')->paginate(10);

    }
