<div>
    <style>
        span.a2a_svg {
            display: inline-block !important;
            float: none;
            margin: 3px;
        }
    </style>
    <x-blog-header />

    @if ($category != '')



        <!-- Contant Start -->
        <div class="row">
            <div class="col-md-8">

                @foreach ($catnews as $newslist)
                    <div class="archive_details">




                        <div class="archive_img"><img width="400" height="225" src="{{ $newslist->image }}"
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                sizes="(max-width: 400px) 100vw, 400px"></div>
                        <h3 class="heading_01"><a
                                href="{{ url('/blogs?blog=' . $newslist->postid) }}">{{ $newslist->title }}</a></h3>
                        <a href="{{ url('/blogs?blog=' . $newslist->postid) }}">
                        </a>
                        <p><a href="{{ url('/blogs?blog=' . $newslist->postid) }}">{{ $newslist->short_description }}
                            </a><a href=" " class="readmore"></a> <span style="text-align:right"><a
                                    href="{{ url('/blogs?blog=' . $newslist->postid) }}">.....আরো
                                    পড়ুন</a></span></p>
                    </div>
                @endforeach



                {{ $catnews->links('pagination-links') }}





            </div>
            <div class="col-md-4">
                <!-- Nav tabs --------------------------------->
                <div class="main_nav">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                data-toggle="tab">সর্বশেষ সংবাদ </a></li>


                    </ul>

                    <!-- Tab panes -->

                    <div class="tab-content">


                        <div role="tabpanel" class="tab-pane active" id="home">



                            @foreach ($latest as $latestList)
                                <div class="images_title">
                                    <a href="{{ url('/blogs?blog=' . $latestList->postid) }}"><img width="400"
                                            height="225" src="{{ $latestList->image }}"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                            alt="" loading="lazy"></a>
                                    <h4 class="heading_02"><a href="">{{ $latestList->title }}</a></h4>
                                </div>
                            @endforeach



                        </div>





                    </div>
                </div>
                <!-- Nav tabs Close --------------------------------->


            </div>


        </div>

        <!-- Contant End -->
    @elseif ($blog != '')
        <!-- Contant Start -->

        <div class="row">
            <div class="col-md-8">


                @foreach ($singleBlog as $singleBlogList)
                    <div class="leadnews">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('blogs?category=' . $singleBlogList->category) }}"><i
                                        class="fa fa-home" aria-hidden="true"></i>
                                </a></li>
                            <li><a href="{{ url('blogs?category=' . $singleBlogList->category) }}"> </a>
                                <a href="{{ url('blogs?category=' . $singleBlogList->category) }}"
                                    rel="category tag">{{ $singleBlogList->category }}</a>
                            </li>
                            <li class="active">{{ $singleBlogList->title }}</li>

                        </ol>



                        <div class="sin-image">

                            <img width="400" height="225" src="{{ $singleBlogList->image }}"
                                class="single-thumbnail wp-post-image" alt="">
                        </div>



                        <h3 class="heading_01" style="font-size:25px;"><a
                                href="{{ url('/blogs?blog=' . $singleBlogList->postid) }}">{{ $singleBlogList->title }}</a>
                        </h3>
                        <ol class="breadcrumb">
                            <li>আপডেট :
                                {{ int_en_to_bn(month_en_to_bn(date('d F, Y', strtotime($singleBlogList->created_at)))) }}
                            </li>
                            <li class="active"> {{ $readpost }} বার পঠিত</li>
                        </ol>
                        <p></p>
                        <p>{!! $singleBlogList->description !!}</p>
                        <p>&nbsp;</p>


                        @php

                            $books = json_decode($singleBlogList->books);

                            // dd($books);
                            $i = 1;
                        @endphp
                        @if ($books != null)
                            <h3>Pdf Books</h3>
                            <div class="row">
                                @foreach ($books as $book)
                                    <div class="col-md-4">
                                        <a target="_blank"
                                            href="{{ url(env('FILE_PATH') . 'book/' . $book->pdf) }}"><img
                                                src="{{ asset(env('FILE_PATH') . 'book/' . $book->cover) }}"
                                                alt=""></a>
                                    </div>


                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </div>
                        @endif


                        <div class="addtoany_share_save_container addtoany_content addtoany_content_bottom">
                            <div class="a2a_kit a2a_kit_size_32 addtoany_list"
                                data-a2a-url="{{ url('/blogs?blog=' . $singleBlogList->id) }}"
                                data-a2a-title="{{ $singleBlogList->title }}" style="line-height: 32px;">
                                <a class="a2a_button_facebook" href="" title="Facebook" rel="nofollow noopener"
                                    target="_blank">
                                    <span class="a2a_svg a2a_s__default a2a_s_facebook"
                                        style="background-color: rgb(24, 119, 242);">
                                        <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 32 32">
                                            <path fill="#FFF"
                                                d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="a2a_label">Facebook</span>
                                </a>
                                <a class="a2a_button_twitter" href="" title="Twitter" rel="nofollow noopener"
                                    target="_blank">
                                    <span class="a2a_svg a2a_s__default a2a_s_twitter"
                                        style="background-color: rgb(29, 155, 240);">
                                        <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 32 32">
                                            <path fill="#FFF"
                                                d="M28 8.557a9.913 9.913 0 01-2.828.775 4.93 4.93 0 002.166-2.725 9.738 9.738 0 01-3.13 1.194 4.92 4.92 0 00-3.593-1.55 4.924 4.924 0 00-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 00-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 01-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 004.6 3.42 9.893 9.893 0 01-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 007.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="a2a_label">Twitter</span>
                                </a>
                                <a class="a2a_button_linkedin" href="" title="LinkedIn"
                                    rel="nofollow noopener" target="_blank">
                                    <span class="a2a_svg a2a_s__default a2a_s_linkedin"
                                        style="background-color: rgb(0, 123, 181);">
                                        <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 32 32">
                                            <path
                                                d="M6.227 12.61h4.19v13.48h-4.19V12.61zm2.095-6.7a2.43 2.43 0 010 4.86c-1.344 0-2.428-1.09-2.428-2.43s1.084-2.43 2.428-2.43m4.72 6.7h4.02v1.84h.058c.56-1.058 1.927-2.176 3.965-2.176 4.238 0 5.02 2.792 5.02 6.42v7.395h-4.183v-6.56c0-1.564-.03-3.574-2.178-3.574-2.18 0-2.514 1.7-2.514 3.46v6.668h-4.187V12.61z"
                                                fill="#FFF"></path>
                                        </svg>
                                    </span>
                                    <span class="a2a_label">LinkedIn</span>
                                </a>
                                <a class="a2a_button_email" href="" title="Email" rel="nofollow noopener"
                                    target="_blank">
                                    <span class="a2a_svg a2a_s__default a2a_s_email"
                                        style="background-color: rgb(1, 102, 255);">
                                        <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 32 32">
                                            <path fill="#FFF"
                                                d="M26 21.25v-9s-9.1 6.35-9.984 6.68C15.144 18.616 6 12.25 6 12.25v9c0 1.25.266 1.5 1.5 1.5h17c1.266 0 1.5-.22 1.5-1.5zm-.015-10.765c0-.91-.265-1.235-1.485-1.235h-17c-1.255 0-1.5.39-1.5 1.3l.015.14s9.035 6.22 10 6.56c1.02-.395 9.985-6.7 9.985-6.7l-.015-.065z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="a2a_label">Email</span>
                                </a>

                                <a class="a2a_dd addtoany_share_save addtoany_share" href="">
                                    <span class="a2a_svg a2a_s__default a2a_s_a2a"
                                        style="background-color: rgb(1, 102, 255);">
                                        <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 32 32">
                                            <g fill="#FFF">
                                                <path d="M14 7h4v18h-4z"></path>
                                                <path d="M7 14h18v4H7z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="a2a_label a2a_localize" data-a2a-localize="inner,Share">Share</span>
                                </a>
                            </div>
                        </div>

                        <p></p>


                    </div>
                @endforeach
                <!-- You can start editing here. -->


                <!-- If comments are open, but there are no comments. -->


                <div id="respond" class="comment-respond">
                    <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow"
                                id="cancel-comment-reply-link" href="" style="display:none;">Cancel
                                reply</a></small></h3>
                    <form action="{{ route('comment.store') }}" method="post" id="commentform"
                        class="comment-form">

                        @csrf

                        <p class="comment-notes"><span id="email-notes">Your email address will not be
                                published.</span> <span class="required-field-message" aria-hidden="true">Required
                                fields are marked <span class="required" aria-hidden="true">*</span></span></p>
                        <p class="comment-form-comment"><label for="comment">Comment <span class="required"
                                    aria-hidden="true">*</span></label>
                            <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                        </p>
                        <p class="comment-form-author"><label for="author">Name <span class="required"
                                    aria-hidden="true">*</span></label> <input id="author" name="author"
                                type="text" value="" size="30" maxlength="245" required="required">
                        </p>
                        <p class="comment-form-email"><label for="email">Email <span class="required"
                                    aria-hidden="true">*</span></label> <input id="email" name="email"
                                type="text" value="" size="30" maxlength="100"
                                aria-describedby="email-notes" required="required"></p>
                        <p class="comment-form-url"><label for="url">Website</label> <input id="url"
                                name="url" type="text" value="" size="30" maxlength="200"></p>

                        <p class="form-submit"><input type="submit" id="submit" class="submit"
                                value="Post Comment"> <input type="hidden" name="comment_post_ID"
                                value="{{ $singleBlog[0]->postid }}" id="comment_post_ID">

                        </p>
                    </form>
                </div><!-- #respond -->


                <style>
                    .blogcomment {
                        box-shadow: 0px 0px 8px #00000045;
                        border-radius: 7px;
                        padding: 10px 29px;
                        margin-top: 10px;
                    }

                    .d-flex.justify-content-between {
                        display: flex;
                    }
                </style>

                <div class="comment_list">
                    <div class="pb-4">
                        <h3>Comments</h3>

                        @foreach ($singleBlogComment as $singleBlogCommentList)
                            <div class="blogcomment mt-4 text-justify float-left">
                                <div class="d-flex justify-content-between">
                                    <h4> {{ $singleBlogCommentList->author }}</h4>
                                    <span>-{{ date('d F, Y', strtotime($singleBlogCommentList->created_at)) }}</span>
                                </div>
                                <br>
                                <p> {{ $singleBlogCommentList->comment }}</p>
                            </div>
                        @endforeach

                        {{ $singleBlogComment->links('pagination-links') }}

                    </div>



                </div>

            </div>


            <div class="col-md-4">

                <!-- Nav tabs --------------------------------->
                <div class="main_nav">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="" aria-controls="home"
                                role="tab" data-toggle="tab">সর্বশেষ সংবাদ </a></li>


                    </ul>

                    <!-- Tab panes -->

                    <div class="tab-content">



                        @foreach ($latest as $latestList)
                            <div class="images_title">
                                <a href="{{ url('/blogs?blog=' . $latestList->postid) }}"><img width="400"
                                        height="225" src="{{ $latestList->image }}"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="" loading="lazy"></a>
                                <h4 class="heading_02"><a href="">{{ $latestList->title }}</a></h4>
                            </div>
                        @endforeach





                    </div>
                </div>
                <!-- Nav tabs Close --------------------------------->

                <div class="widget_area">
                    <figure class="wp-block-image size-full"><img loading="lazy" width="349" height="301"
                            src="https://dailysavvataralo.com/wp-content/uploads/2021/09/ads.png" alt=""
                            class="wp-image-79"
                            srcset="https://dailysavvataralo.com/wp-content/uploads/2021/09/ads.png 349w, https://dailysavvataralo.com/wp-content/uploads/2021/09/ads-300x259.png 300w"
                            sizes="(max-width: 349px) 100vw, 349px"></figure>
                </div>
            </div>
        </div>
        <!-- Contant End -->
    @else
        <!-- Contant Start -->
        <!-- Section 04 (top three div) #################################-->
        <!--cat 1 start -->
        <div class="row">
            <div class="col-md-4">

                @foreach ($heroSection as $heroSectionList)
                    <div class="leadnews">

                        <a href="{{ url('/blogs?blog=' . $heroSectionList->postid) }}"><img width="400"
                                height="225" src="{{ $heroSectionList->image }}"
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                loading="lazy" /></a>
                        <h3 class="heading_01">
                            <a
                                href="{{ url('/blogs?blog=' . $heroSectionList->postid) }}">{{ $heroSectionList->title }}</a>
                        </h3>
                        <p>{{ $heroSectionList->short_description }}
                            <a href="{{ url('/blogs?blog=' . $heroSectionList->postid) }}"
                                class='readmore'></a><span style="text-align:right">
                                <a href="{{ url('/blogs?blog=' . $heroSectionList->postid) }}">.....আরো
                                    পড়ুন</a></span>
                        </p>
                    </div>
                @endforeach
            </div>
            <!--cat 1 end -->
            <!--cat tab star -->

            <div class="col-md-4">

                <!-- Nav tabs --------------------------------->
                <div class="main_nav">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home"
                                role="tab" data-toggle="tab">সর্বশেষ সংবাদ </a></li>
                        {{-- <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
								data-toggle="tab">জনপ্রিয় সংবাদ</a></li> --}}

                    </ul>

                    <!-- Tab panes -->

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            @foreach ($latest as $latestList)
                                <div class="images_title">
                                    <a href="{{ url('/blogs?blog=' . $latestList->postid) }}"><img width="400"
                                            height="225" src="{{ $latestList->image }}"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                            alt="" loading="lazy"></a>
                                    <h4 class="heading_02"><a
                                            href="{{ url('/blogs?blog=' . $latestList->postid) }}">{{ $latestList->title }}</a>
                                    </h4>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Nav tabs Close --------------------------------->



            </div>
            <!--cat tab end -->
            <div class="col-md-4">
                <div class="big_images">
                    <div class="widget_area">
                        <p><iframe loading="lazy"
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fm.facebook.com%2Fsavvataralo&amp;tabs=timeline&amp;width=340&amp;height=350&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=527733588191935"
                                width="340" height="350" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </p>
                    </div>
                </div>

            </div>
        </div>


        <!-- Section 05 (top two div) #################################-->

        <div class="row">
            <!--cat 2 start -->
            <div class="col-md-8">
                <div class="row">



                    @foreach ($latest7 as $latest7List)
                        <div class="col-md-4">
                            <div class="exclusive">
                                <a href="{{ url('/blogs?blog=' . $latest7List->postid) }}"><img width="400"
                                        height="225" src="{{ $latest7List->image }}"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="" loading="lazy" /></a>
                                <h3 class="heading_03">
                                    <a
                                        href="{{ url('/blogs?blog=' . $latest7List->postid) }}">{{ $latest7List->title }}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
            <!--cat 2 end -->
            <div class="col-md-4">
                <div class="big_images">
                    <div class="widget_area">
                        <p><img src="https://dailysavvataralo.com/wp-content/uploads/2021/12/আমজাদ-ভাই.jpeg"
                                alt="Bijoy Dibos" style="width:340px;height:380px;"></p>
                    </div>
                </div>

            </div>
        </div>
        <!-- Section 06 (top add heare) #################################-->

        <div class="row ads">
            <div class="col-md-6">

                <div class="widget_area">
                    <figure class="wp-block-image size-full"><img loading="lazy" width="725" height="100"
                            src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif"
                            alt="" class="wp-image-10" /></figure>
                </div>
            </div>
            <div class="col-md-6">

                <div class="widget_area">
                    <figure class="wp-block-image size-full"><img loading="lazy" width="725" height="100"
                            src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif"
                            alt="" class="wp-image-10" /></figure>
                </div>
            </div>
        </div>

        <!-- Section 07 (top two div) #################################-->


        <div class="row">

            <!--cat 3 start -->
            <div class="col-md-8">


                @if ($nationalcount > 0)




                    <h4 class="catagory_title"><a href="{{ url('blogs?category=জাতীয়') }}"><i
                                class="fa fa-bars"></i> জাতীয় </a></h4>
                    <div class="row">
                        <?php

                        $ni = 1;
                        ?>
                        @foreach ($national as $national1st)
                            @if ($ni == 1)
                                <div class="col-md-6">
                                    <div class="leadnews">
                                        <a href="{{ url('/blogs?blog=' . $national1st->postid) }}"><img
                                                width="400" height="225" src="{{ $national1st->image }}"
                                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                alt="" loading="lazy"
                                                sizes="(max-width: 400px) 100vw, 400px" /></a>
                                        <h3 class="heading_01"><a
                                                href="{{ url('/blogs?blog=' . $national1st->postid) }}">{{ $national1st->title }}</a>
                                        </h3>
                                        <p>{{ $national1st->short_description }} <a
                                                href="{{ url('/blogs?blog=' . $national1st->postid) }}"
                                                class='readmore'></a><span style="text-align:right"><a
                                                    href="{{ url('blogs?category=জাতীয়') }}">.....আরো
                                                    পড়ুন</a></span></p>
                                    </div>

                                </div>
                            @endif
                            <?php
                            $ni++;
                            ?>
                        @endforeach

                        <div class="col-md-6">


                            <?php

                            $nii = 1;
                            ?>
                            @foreach ($national as $nationallist)
                                @if ($nii == 1)
                                @else
                                    <div class="images_title">
                                        <a href="{{ url('/blogs?blog=' . $nationallist->postid) }}"><img
                                                width="400" height="225" src="{{ $nationallist->image }}"
                                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                alt="" loading="lazy" /></a>
                                        <h4 class="heading_02">
                                            <a href="{{ url('/blogs?blog=' . $nationallist->postid) }}">
                                                {{ $nationallist->title }}</a>
                                        </h4>
                                    </div>
                                @endif
                                <?php
                                $nii++;
                                ?>
                            @endforeach





                        </div>
                        <div class="morenews"><a href="{{ url('blogs?category=জাতীয়') }}"><i
                                    class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                আরো সংবাদ..</a></div>
                    </div>
                    <!--cat 3 end -->
                @endif {{-- জাতীয় category --}}
                <!--cat 4 start -->
            </div>
            <div class="col-md-4">
                <div class="internetional">


                    <h4 class="catagory_title">
                        <a href="{{ url('blogs?category=আন্তর্জাতিক') }}"><i class="fa fa-bars"></i>
                            আন্তর্জাতিক</a>
                    </h4>


                    @foreach ($International as $InternationalList)
                        <div class="images_title">
                            <a href="{{ url('/blogs?blog=' . $InternationalList->postid) }}"><img width="400"
                                    height="225" src="{{ $InternationalList->image }}"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                    loading="lazy" /></a>
                            <h4 class="heading_02"><a
                                    href="{{ url('/blogs?blog=' . $InternationalList->postid) }}">
                                    {{ $InternationalList->title }}</a></h4>
                        </div>
                    @endforeach
                    <div class="morenews"><a href="{{ url('blogs?category=আন্তর্জাতিক') }}"><i
                                class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                            আরো সংবাদ..</a></div>

                </div>

                <!--cat 4 end  -->
            </div>
        </div>

        <!-- Section 08 (top two add-here) #################################-->

        <div class="row ads">
            <div class="col-md-6">
                <div class="widget_area">
                    <figure class="wp-block-image size-full"><img loading="lazy" width="725" height="100"
                            src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif"
                            alt="" class="wp-image-10" /></figure>
                </div>
            </div>
            <div class="col-md-6">
                <div class="widget_area">
                    <figure class="wp-block-image size-full"><img loading="lazy" width="725" height="100"
                            src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif"
                            alt="" class="wp-image-10" /></figure>
                </div>
            </div>
        </div>

        <div class="row ads">
            <div class="col-md-12">

            </div>
        </div>

















        <!-- Section 07 (top two div) #################################-->


        <div class="row">

            <!--cat 3 start -->
            <div class="col-md-8">






                <h4 class="catagory_title"><a href="{{ url('blogs?category=রাজনীতি') }}"><i
                            class="fa fa-bars"></i> রাজনীতি </a></h4>
                <div class="row">
                    <?php

                    $ni = 1;
                    ?>
                    @foreach ($Politics as $Politics1st)
                        @if ($ni == 1)
                            <div class="col-md-6">
                                <div class="leadnews">
                                    <a href="{{ url('/blogs?blog=' . $Politics1st->postid) }}"><img width="400"
                                            height="225" src="{{ $Politics1st->image }}"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                            alt="" loading="lazy"
                                            sizes="(max-width: 400px) 100vw, 400px" /></a>
                                    <h3 class="heading_01"><a
                                            href="{{ url('/blogs?blog=' . $Politics1st->postid) }}">{{ $Politics1st->title }}</a>
                                    </h3>
                                    <p>{{ $Politics1st->short_description }} <a
                                            href="{{ url('/blogs?blog=' . $Politics1st->postid) }}"
                                            class='readmore'></a><span style="text-align:right"><a
                                                href="{{ url('blogs?category=রাজনীতি') }}">.....আরো
                                                পড়ুন</a></span></p>
                                </div>

                            </div>
                        @endif
                        <?php
                        $ni++;
                        ?>
                    @endforeach

                    <div class="col-md-6">


                        <?php

                        $nii = 1;
                        ?>
                        @foreach ($Politics as $Politicslist)
                            @if ($nii == 1)
                            @else
                                <div class="images_title">
                                    <a href="{{ url('/blogs?blog=' . $Politicslist->postid) }}"><img width="400"
                                            height="225" src="{{ $Politicslist->image }}"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                            alt="" loading="lazy" /></a>
                                    <h4 class="heading_02">
                                        <a href="{{ url('/blogs?blog=' . $Politicslist->postid) }}">
                                            {{ $Politicslist->title }}</a>
                                    </h4>
                                </div>
                            @endif
                            <?php
                            $nii++;
                            ?>
                        @endforeach





                    </div>
                    <div class="morenews"><a href="{{ url('blogs?category=রাজনীতি') }}"><i
                                class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                            আরো সংবাদ..</a></div>
                </div>
                <!--cat 3 end -->

                <!--cat 4 start -->
            </div>
            <div class="col-md-4">
                <div class="internetional">


                    <h4 class="catagory_title">
                        <a href="{{ url('blogs?category=অর্থনীতি') }}"><i class="fa fa-bars"></i> অর্থনীতি</a>
                    </h4>


                    @foreach ($Economy as $EconomyList)
                        <div class="images_title">
                            <a href="{{ url('/blogs?blog=' . $EconomyList->postid) }}"><img width="400"
                                    height="225" src="{{ $EconomyList->image }}"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                    loading="lazy" /></a>
                            <h4 class="heading_02"><a href="{{ url('/blogs?blog=' . $EconomyList->postid) }}">
                                    {{ $EconomyList->title }}</a></h4>
                        </div>
                    @endforeach
                    <div class="morenews"><a href="{{ url('blogs?category=অর্থনীতি') }}"><i
                                class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                            আরো সংবাদ..</a></div>

                </div>

                <!--cat 4 end  -->
            </div>
        </div>










        <!-- Section 10 (top add here) #################################-->
        <div class="row ads">
            <div class="col-md-6">
                <div class="widget_area">
                    <figure class="wp-block-image size-full"><img loading="lazy" width="725" height="100"
                            src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif"
                            alt="" class="wp-image-10" /></figure>
                </div>
            </div>
            <div class="col-md-6">
                <div class="widget_area">
                    <figure class="wp-block-image size-full"><img loading="lazy" width="725" height="100"
                            src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif"
                            alt="" class="wp-image-10" /></figure>
                </div>
            </div>
        </div>
        <!-- Section 11 (top three div) #################################-->

        <div class="row">
            <!-- cat 7 start -->



            <div class="col-md-4">
                <h4 class="catagory_title"> <a href="{{ url('blogs?category=শিল্প-সাহিত্য') }}"><i
                            class="fa fa-bars"></i> শিল্প-সাহিত্য</a></h4>


                <?php

                $ni = 1;
                ?>
                @foreach ($Art_literature as $Art_literature1st)
                    @if ($ni == 1)
                        <div class="leadnews">
                            <a href="{{ url('/blogs?blog=' . $Art_literature1st->postid) }}"><img width="400"
                                    height="225" src="{{ $Art_literature1st->image }}"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                    loading="lazy" /></a>
                        </div>
                        <div class="heading_title">
                            <h4 class="heading_02"> <a
                                    href="{{ url('/blogs?blog=' . $Art_literature1st->postid) }}">{{ $Art_literature1st->title }}</a>
                            </h4>
                        </div>
                    @endif
                    <?php
                    $ni++;
                    ?>
                @endforeach




                <?php

                $nii = 1;
                ?>
                @foreach ($Art_literature as $Art_literaturelist)
                    @if ($nii == 1)
                    @else
                        <div class="heading_title">
                            <h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
                                    href="{{ url('/blogs?blog=' . $Art_literaturelist->postid) }}">{{ $Art_literaturelist->title }}</a>
                            </h4>
                        </div>
                    @endif
                    <?php
                    $nii++;
                    ?>
                @endforeach




                <div class="morenews"><a href="{{ url('blogs?category=শিল্প-সাহিত্য') }}"><i
                            class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                        আরো সংবাদ..</a></div>


            </div>
            <!-- cat 7 end -->






            <div class="col-md-4">
                <h4 class="catagory_title"> <a href="{{ url('blogs?category=খেলাধুলা') }}"><i
                            class="fa fa-bars"></i> খেলাধুলা</a></h4>


                <?php

                $ni = 1;
                ?>
                @foreach ($Art_literature as $Art_literature1st)
                    @if ($ni == 1)
                        <div class="leadnews">
                            <a href="{{ url('/blogs?blog=' . $Art_literature1st->postid) }}"><img width="400"
                                    height="225" src="{{ $Art_literature1st->image }}"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                    loading="lazy" /></a>
                        </div>
                        <div class="heading_title">
                            <h4 class="heading_02"> <a
                                    href="{{ url('/blogs?blog=' . $Art_literature1st->postid) }}">{{ $Art_literature1st->title }}</a>
                            </h4>
                        </div>
                    @endif
                    <?php
                    $ni++;
                    ?>
                @endforeach




                <?php

                $nii = 1;
                ?>
                @foreach ($Art_literature as $Art_literaturelist)
                    @if ($nii == 1)
                    @else
                        <div class="heading_title">
                            <h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
                                    href="{{ url('/blogs?blog=' . $Art_literaturelist->postid) }}">{{ $Art_literaturelist->title }}</a>
                            </h4>
                        </div>
                    @endif
                    <?php
                    $nii++;
                    ?>
                @endforeach




                <div class="morenews"><a href="{{ url('blogs?category=খেলাধুলা') }}"><i
                            class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                        আরো সংবাদ..</a></div>


            </div>
            <!-- cat 7 end -->






            <div class="col-md-4">
                <h4 class="catagory_title"> <a href="{{ url('blogs?category=বিনোদন') }}"><i
                            class="fa fa-bars"></i> বিনোদন</a></h4>


                <?php

                $ni = 1;
                ?>
                @foreach ($Art_literature as $Art_literature1st)
                    @if ($ni == 1)
                        <div class="leadnews">
                            <a href="{{ url('/blogs?blog=' . $Art_literature1st->postid) }}"><img width="400"
                                    height="225" src="{{ $Art_literature1st->image }}"
                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                    loading="lazy" /></a>
                        </div>
                        <div class="heading_title">
                            <h4 class="heading_02"> <a
                                    href="{{ url('/blogs?blog=' . $Art_literature1st->postid) }}">{{ $Art_literature1st->title }}</a>
                            </h4>
                        </div>
                    @endif
                    <?php
                    $ni++;
                    ?>
                @endforeach




                <?php

                $nii = 1;
                ?>
                @foreach ($Art_literature as $Art_literaturelist)
                    @if ($nii == 1)
                    @else
                        <div class="heading_title">
                            <h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
                                    href="{{ url('/blogs?blog=' . $Art_literaturelist->postid) }}">{{ $Art_literaturelist->title }}</a>
                            </h4>
                        </div>
                    @endif
                    <?php
                    $nii++;
                    ?>
                @endforeach




                <div class="morenews"><a href="{{ url('blogs?category=বিনোদন') }}"><i
                            class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                        আরো সংবাদ..</a></div>


            </div>
            <!-- cat 7 end -->







        </div>

        <!-- Section 12 (top add here) #################################-->
        <div class="row ads">
            <div class="col-md-6">
                <div class="widget_area">
                    <figure class="wp-block-image size-full"><img loading="lazy" width="725" height="100"
                            src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif"
                            alt="" class="wp-image-10" /></figure>
                </div>
            </div>
            <div class="col-md-6">
                <div class="widget_area">
                    <figure class="wp-block-image size-full"><img loading="lazy" width="725" height="100"
                            src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif"
                            alt="" class="wp-image-10" /></figure>
                </div>
            </div>
        </div>











        <!-- Contant End -->


    @endif


</div>
