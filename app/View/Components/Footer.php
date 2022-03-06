<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Visitor;
class Footer extends Component
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
        $dateVisitor = [
            'date'=>date('d-m-Y'),
        ];
     $data['dateVisitor'] = Visitor::where($dateVisitor)->count();

        $monthVisitor = [
            'month'=>date('F'),
        ];
     $data['monthVisitor'] = Visitor::where($monthVisitor)->count();
     $data['TotalVisitor'] = Visitor::count();

        $yearVisitor = [
            'year'=>date('Y'),
        ];
     $data['yearVisitor'] = Visitor::where($yearVisitor)->count();

        $data['settings'] = DB::table('settings')->get();

        return view('components.footer',$data);
    }
}
