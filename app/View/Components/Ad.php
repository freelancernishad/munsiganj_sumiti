<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
class Ad extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $wh = [
            'page'=>'All',
            'position'=>'Header',
        ];

           
$data['ad'] =   DB::table('ads')->where($wh)->get();

    
$data['settings'] = DB::table('settings')->get();




        return view('components.ad',$data);
    }
}
