

<div>



@foreach  ($blogs as $post)
    
<div class="blog">
    
    <div class="blogImage">
        <a href="{{ url('blogs/single/'.$post->id) }}">  <img width="100%" src="{{ $post->image }}" alt=""></a>
    </div>
    
    <h1 class="blogTitlw"><a href="{{ url('blogs/single/'.$post->id) }}">{{ $post->title }}</a></h1>
                        <span class="blogAuthDate" >
                            
                            
                     
                            
                            <?php  echo date('M d, Y | h:i A',strtotime($post->created_at));  ?> | <a href="{{ url('blogs/'.$post->category) }}">{{ $post->category }}</a> </span>
                        <p class="blog_dec">{{ $post->short_description }}</p>
                        
                        
                        <a href="{{ url('blogs/single/'.$post->id) }}" class="blogRead">READ MORE</a>
                        
                    </div>
                    
                    @endforeach 
    

                {{$blogs->links('pagination-links') }}

                </div>   

