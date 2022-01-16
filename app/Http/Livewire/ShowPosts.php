<?php

namespace App\Http\Livewire;

use App\Models\blog;
use Livewire\Component;

use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;
public $count = 1;

public $post;
public $cate;


    public function Increment()
    {
      $this->count++;
    }

    public function decrement()
    {
      
    }






    public function render()
    {


        if($this->cate==''){
            return view('livewire.show-posts',['blogs' =>blog::latest()->paginate(3)]);

        }else if($this->cate=='category'){

            return view('livewire.show-posts',['blogs' =>blog::latest()->where('category',$this->post)->paginate(3)]);
        }else{

        }



        // return view('livewire.show-posts',[
        //     'blogs' =>blog::latest()->paginate(1)
        // ]);

   
    }
}
