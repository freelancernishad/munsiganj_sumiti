@extends('layouts.master')
@section('content')
<style>
a.blogRead:hover {
    background: #c12529;
    color: white;
}
a.blogRead {
    border: 2px solid #c12529;
    padding: 10px 28px;
    font-size: 18px;
    color: #c12529;
    text-decoration: none;
    transition: all 0.5s;
}
.blog {
    padding-bottom: 44px;
    border-bottom: 2px solid #c12529;
    padding-top: 20px;
}
.blogImage {
    max-width: 450px;
}
h1.blogTitlw a{
    font-size: 25px;
    font-weight: 500;
    margin-top: 18px;
    margin-bottom: 13px;
    color: #666666;
}
span.blogAuthDate {
    font-size: 16px;
    font-weight: 600;
    color: #c12529;
}
p.blog_dec {
    margin-bottom: 39px;
    color: #666666;
    margin-top: 7px;
}
span.blogAuthDate a {
    color: #c12529;
}
li.categoryList a {
    display: block;
    padding: 4px;
    border-bottom: 1px dotted #c12529;
    font-size: 17px;
    color: #707070;
    font-weight: 600;
}
button.postBtn {
    background: black;
    border: 0;
    padding: 2px 5px;
    font-size: 19px;
    color: white;
}


</style>


    <main>
        <section class="hero_area">
            <div class="container">
            <div class="row p-0">
       
                <div class="col-md-9" style="padding: 50px 0;" >


                    <livewire:show-posts :post="$post" :cate="$cate">

                {{--  <livewire:show-posts />  --}}

                </div>

<div class="col-md-3" style="padding: 50px 0;">




<form action="" method="post">
    <div class="form-group">
<label> Search Now</label>
<input type="text" name="searchPost" class="form-control">
<button type="submit" class="postBtn">Go</button>
    </div>


</form>



<h4 class="CategoryTitle">Categories</h4>

<ul class="list-unstyled">

    @foreach ($categories as $cList)
        
   
    <li class="categoryList" >
        <a href="{{ url('blogs/'.$cList->name) }}">{{ $cList->name }}</a>
    </li>
    
    @endforeach



</ul>



</div>



</div>
</div>
</section>
 
      
    </main>
@endsection
