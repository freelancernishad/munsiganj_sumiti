<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\category;
use App\Models\blog;
use App\Models\BlogComment;
use App\Models\PostRead;
use Livewire\WithPagination;
class BlogPage extends Component
{
    use WithPagination;

    public $category;
    public $blog;


        protected $queryString = [

            'category' => ['except' => ''],
            'blog' => ['except' => ''],

        ];





    public function categoryfun($value)
    {
        $this->category = $value;
        $this->blog = '';
    }
    public function songleBlog($value)
    {
        $this->category = '';
        $this->blog = $value;
    }


    public function render()
    {
        if($this->category!=''){



            return view('livewire.blog-page',[

                'latest' => blog::orderBy('id', 'desc')->take(10)->get(),
                'catnews' => blog::where('category',$this->category)->orderBy('id','DESC')->paginate(10),
                'catMenu' => category::orderBy('id','ASC')->get(),
                'category' => $this->category,
                'blog' => $this->blog,
            ]);
        }elseif($this->blog!=''){


          $ip =  $_SERVER['REMOTE_ADDR'];

          $visitorWhere = [
              'ip'=>$ip,
              'date'=>date('d-m-Y'),
          ];

       $PostRead = PostRead::where($visitorWhere)->count();
        if($PostRead>0){

        }else{

            $datainsert = [
                'post_id'=>$this->blog,
                'ip'=>$ip,
                'count'=>1,
                'date'=>date('d-m-Y'),
            ];
            PostRead::create($datainsert);
        }

            return view('livewire.blog-page',[

                'latest' => blog::orderBy('id', 'desc')->take(10)->get(),
                'singleBlog' => blog::where('postid',$this->blog)->orderBy('id','DESC')->get(),
                'readpost' => PostRead::where('post_id',$this->blog)->count(),
                'singleBlogComment' => BlogComment::where('comment_post_ID',$this->blog)->orderBy('id','DESC')->paginate(5),
                'catnews' => blog::where('category',$this->category)->orderBy('id','DESC')->paginate(10),
                'catMenu' => category::orderBy('id','ASC')->get(),
                'category' => $this->category,
                'blog' => $this->blog,
            ]);
        }else{
        return view('livewire.blog-page',[
            'heroSection' => blog::orderBy('id', 'desc')->take(1)->get(),
            'latest7' => blog::orderBy('id', 'desc')->take(7)->get(),

            'nationalcount' => blog::where('category','???????????????')->count(),
            'national' => blog::where('category','???????????????')->orderBy('id', 'desc')->take(6)->get(),

            'Internationalcount' => blog::where('category','?????????????????????????????????')->count(),
            'International' => blog::where('category','?????????????????????????????????')->orderBy('id', 'desc')->take(5)->get(),

            'Politicscount' => blog::where('category','?????????????????????')->count(),
            'Politics' => blog::where('category','?????????????????????')->orderBy('id', 'desc')->take(6)->get(),

            'Economycount' => blog::where('category','????????????????????????')->count(),
            'Economy' => blog::where('category','????????????????????????')->orderBy('id', 'desc')->take(5)->get(),

            'Art_literaturecount' => blog::where('category','???????????????-?????????????????????')->count(),
            'Art_literature' => blog::where('category','???????????????-?????????????????????')->orderBy('id', 'desc')->take(6)->get(),

            'Sportscount' => blog::where('category','????????????????????????')->count(),
            'Sports' => blog::where('category','????????????????????????')->orderBy('id', 'desc')->take(6)->get(),

            'Entertainmentcount' => blog::where('category','??????????????????')->count(),
            'Entertainment' => blog::where('category','??????????????????')->orderBy('id', 'desc')->take(6)->get(),

            'latest' => blog::orderBy('id', 'desc')->take(10)->get(),
            'catnews' => blog::where('category',$this->category)->orderBy('id','DESC')->paginate(10),
            'catMenu' => category::orderBy('id','ASC')->get(),
            'category' => $this->category,
            'blog' => $this->blog,
        ]);
    }
    }
}
