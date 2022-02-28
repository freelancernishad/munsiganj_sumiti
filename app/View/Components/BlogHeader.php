<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\category;
use App\Models\blog;
class BlogHeader extends Component
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
        $catMenu = category::orderBy('id','ASC')
        ->get();

        $latestnews = blog::orderBy('id', 'desc')->take(10)->get();

        return view('components.blog-header',compact('catMenu','latestnews'));
    }
}
