<div>
<style>
    span.a2a_svg {
    display: inline-block !important;
    float: none;
    margin: 3px;
}
</style>
    <x-blog-header />

    @if ($category!='')



<!-- Contant Start -->
<div class="row">
    <div class="col-md-8">

@foreach ($catnews as $newslist)
        <div class="archive_details">




            <div class="archive_img"><img width="400" height="225"
                    src="{{ $newslist->image }}"
                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""

                    sizes="(max-width: 400px) 100vw, 400px"></div>
            <h3 class="heading_01"><a  wire:click="songleBlog('{{ $newslist->postid }}')" href="javascript:void(0)">{{ $newslist->title }}</a></h3><a wire:click="songleBlog('{{ $newslist->postid }}')" href="javascript:void(0)">
            </a>
            <p><a  wire:click="songleBlog('{{ $newslist->postid }}')" href="javascript:void(0)">{{ $newslist->short_description }} </a><a
                    href=" " class="readmore"></a> <span style="text-align:right"><a wire:click="songleBlog('{{ $newslist->postid }}')" href="javascript:void(0)">.....আরো
                        পড়ুন</a></span></p>
        </div>

@endforeach



{{$catnews->links('pagination-links') }}





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
                        <a wire:click="songleBlog('{{ $latestList->postid }}')" href="javascript:void(0)"><img width="400" height="225"
                                src="{{ $latestList->image }}"
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                loading="lazy"></a>
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





@elseif ($blog!='')


<!-- Contant Start -->

<div class="row">
    <div class="col-md-8">


@foreach ($singleBlog as $singleBlogList)





        <div class="leadnews">
            <ol class="breadcrumb">
                <li><a href="javascript:void(0)" wire:click="categoryfun('{{ $singleBlogList->category }}')"><i class="fa fa-home" aria-hidden="true"></i>
                    </a></li>
                <li><a href="#" wire:click="categoryfun('{{ $singleBlogList->category }}')" ></a><a href="javascript:void(0)" wire:click="categoryfun('{{ $singleBlogList->category }}')" rel="category tag">{{ $singleBlogList->category }}</a></li>
                <li class="active">{{ $singleBlogList->title }}</li>

            </ol>



            <div class="sin-image">

                <img width="400" height="225"
                    src="{{ $singleBlogList->image }}"
                    class="single-thumbnail wp-post-image" alt="">
            </div>



            <h3 class="heading_01" style="font-size:25px;"><a wire:click="songleBlog('{{ $singleBlogList->postid }}')" href="javascript:void(0)">{{ $singleBlogList->title }}</a></h3>
            <ol class="breadcrumb">
                <li>আপডেট : {{ int_en_to_bn(month_en_to_bn(date("d F, Y", strtotime($singleBlogList->created_at)))) }} </li>
                <li class="active"> {{ $readpost }} বার পঠিত</li>
            </ol>
            <p></p>
            <p>{!! $singleBlogList->description !!}</p>
            <p>&nbsp;</p>
            <div class="addtoany_share_save_container addtoany_content addtoany_content_bottom">
                <div class="a2a_kit a2a_kit_size_32 addtoany_list" data-a2a-url=""
                    data-a2a-title="টংগিবাড়ীতে শান্তিপূর্ণ শেষ হয়েছে গণটিকার ১ম ডোজ" style="line-height: 32px;"><a
                        class="a2a_button_facebook" href="" title="Facebook" rel="nofollow noopener"
                        target="_blank"><span class="a2a_svg a2a_s__default a2a_s_facebook"
                            style="background-color: rgb(24, 119, 242);"><svg focusable="false" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path fill="#FFF"
                                    d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z">
                                </path>
                            </svg></span><span class="a2a_label">Facebook</span></a><a class="a2a_button_twitter"
                        href="" title="Twitter" rel="nofollow noopener" target="_blank"><span
                            class="a2a_svg a2a_s__default a2a_s_twitter"
                            style="background-color: rgb(29, 155, 240);"><svg focusable="false" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path fill="#FFF"
                                    d="M28 8.557a9.913 9.913 0 01-2.828.775 4.93 4.93 0 002.166-2.725 9.738 9.738 0 01-3.13 1.194 4.92 4.92 0 00-3.593-1.55 4.924 4.924 0 00-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 00-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 01-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 004.6 3.42 9.893 9.893 0 01-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 007.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z">
                                </path>
                            </svg></span><span class="a2a_label">Twitter</span></a><a class="a2a_button_linkedin"
                        href="" title="LinkedIn" rel="nofollow noopener" target="_blank"><span
                            class="a2a_svg a2a_s__default a2a_s_linkedin"
                            style="background-color: rgb(0, 123, 181);"><svg focusable="false" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path
                                    d="M6.227 12.61h4.19v13.48h-4.19V12.61zm2.095-6.7a2.43 2.43 0 010 4.86c-1.344 0-2.428-1.09-2.428-2.43s1.084-2.43 2.428-2.43m4.72 6.7h4.02v1.84h.058c.56-1.058 1.927-2.176 3.965-2.176 4.238 0 5.02 2.792 5.02 6.42v7.395h-4.183v-6.56c0-1.564-.03-3.574-2.178-3.574-2.18 0-2.514 1.7-2.514 3.46v6.668h-4.187V12.61z"
                                    fill="#FFF"></path>
                            </svg></span><span class="a2a_label">LinkedIn</span></a><a class="a2a_button_email" href=""
                        title="Email" rel="nofollow noopener" target="_blank"><span
                            class="a2a_svg a2a_s__default a2a_s_email" style="background-color: rgb(1, 102, 255);"><svg
                                focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 32 32">
                                <path fill="#FFF"
                                    d="M26 21.25v-9s-9.1 6.35-9.984 6.68C15.144 18.616 6 12.25 6 12.25v9c0 1.25.266 1.5 1.5 1.5h17c1.266 0 1.5-.22 1.5-1.5zm-.015-10.765c0-.91-.265-1.235-1.485-1.235h-17c-1.255 0-1.5.39-1.5 1.3l.015.14s9.035 6.22 10 6.56c1.02-.395 9.985-6.7 9.985-6.7l-.015-.065z">
                                </path>
                            </svg></span><span class="a2a_label">Email</span></a><a class="a2a_button_print" href=""
                        title="Print" rel="nofollow" target=""><span class="a2a_svg a2a_s__default a2a_s_print"
                            style="background-color: rgb(1, 102, 255);"><svg focusable="false" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M22.5 19.59V24h-13v-4.41z" fill="#fff" stroke="#fff" stroke-linecap="round"
                                    stroke-miterlimit="10" stroke-width="1.4"></path>
                                <path
                                    d="M9.44 21.12H6.38a.8.8 0 01-.87-.7v-7.35a.8.8 0 01.88-.7h19.23a.8.8 0 01.88.7v7.35a.8.8 0 01-.88.7h-3.06"
                                    fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10"
                                    stroke-width="1.4"></path>
                                <path d="M22.5 12.32V8h-13v4.28" fill="#fff" stroke="#fff" stroke-linecap="round"
                                    stroke-miterlimit="10" stroke-width="1.4"></path>
                            </svg></span><span class="a2a_label">Print</span></a><a
                        class="a2a_dd addtoany_share_save addtoany_share" href=""><span
                            class="a2a_svg a2a_s__default a2a_s_a2a" style="background-color: rgb(1, 102, 255);"><svg
                                focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 32 32">
                                <g fill="#FFF">
                                    <path d="M14 7h4v18h-4z"></path>
                                    <path d="M7 14h18v4H7z"></path>
                                </g>
                            </svg></span><span class="a2a_label a2a_localize"
                            data-a2a-localize="inner,Share">Share</span></a></div>
            </div>
            <p></p>


        </div>
        @endforeach
        <!-- You can start editing here. -->


        <!-- If comments are open, but there are no comments. -->


        <div id="respond" class="comment-respond">
            <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow"
                        id="cancel-comment-reply-link" href="" style="display:none;">Cancel reply</a></small></h3>
            <form action="{{ route('comment.store') }}" method="post" id="commentform" class="comment-form">

                @csrf

                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> <span
                        class="required-field-message" aria-hidden="true">Required fields are marked <span
                            class="required" aria-hidden="true">*</span></span></p>
                <p class="comment-form-comment"><label for="comment">Comment <span class="required"
                            aria-hidden="true">*</span></label> <textarea id="comment" name="comment" cols="45" rows="8"
                        maxlength="65525" required="required"></textarea></p>
                <p class="comment-form-author"><label for="author">Name <span class="required"
                            aria-hidden="true">*</span></label> <input id="author" name="author" type="text" value=""
                        size="30" maxlength="245" required="required"></p>
                <p class="comment-form-email"><label for="email">Email <span class="required"
                            aria-hidden="true">*</span></label> <input id="email" name="email" type="text" value=""
                        size="30" maxlength="100" aria-describedby="email-notes" required="required"></p>
                <p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="text"
                        value="" size="30" maxlength="200"></p>

                <p class="form-submit"><input type="submit" id="submit" class="submit"
                        value="Post Comment"> <input type="hidden" name="comment_post_ID" value="{{ $singleBlog[0]->postid }}"
                        id="comment_post_ID">

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
                    <h4> {{ $singleBlogCommentList->author }}</h4> <span>-{{ date("d F, Y", strtotime($singleBlogCommentList->created_at)); }}</span>
                </div>
                    <br>
                    <p> {{ $singleBlogCommentList->comment }}</p>
                </div>
                @endforeach

                {{$singleBlogComment->links('pagination-links') }}

            </div>



        </div>

    </div>


    <div class="col-md-4">

        <!-- Nav tabs --------------------------------->
        <div class="main_nav">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="" aria-controls="home" role="tab"
                        data-toggle="tab">সর্বশেষ সংবাদ </a></li>


            </ul>

            <!-- Tab panes -->

            <div class="tab-content">



                @foreach ($latest as $latestList)



                    <div class="images_title">
                        <a wire:click="songleBlog('{{ $latestList->postid }}')" href="javascript:void(0)"><img width="400" height="225"
                                src="{{ $latestList->image }}"
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                loading="lazy"></a>
                        <h4 class="heading_02"><a href="">{{ $latestList->title }}</a></h4>
                    </div>

                    @endforeach





            </div>
        </div>
        <!-- Nav tabs Close --------------------------------->

        <div class="widget_area">
            <figure class="wp-block-image size-full"><img loading="lazy" width="349" height="301"
                    src="https://dailysavvataralo.com/wp-content/uploads/2021/09/ads.png" alt="" class="wp-image-79"
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

					<a
                    wire:click="songleBlog('{{ $heroSectionList->postid }}')" href="javascript:void(0)"><img
							width="400" height="225"
							src="{{ $heroSectionList->image }}"
							class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
							loading="lazy" /></a>
					<h3 class="heading_01"><a
                        wire:click="songleBlog('{{ $heroSectionList->postid }}')" href="javascript:void(0)">{{ $heroSectionList->title }}</a></h3>
					<p>{{ $heroSectionList->short_description }} <a
                        wire:click="songleBlog('{{ $heroSectionList->postid }}')" href="javascript:void(0)"
							class='readmore'></a><span style="text-align:right"><a
                                wire:click="songleBlog('{{ $heroSectionList->postid }}')" href="javascript:void(0)">.....আরো
								পড়ুন</a></span></p>
				</div>
                @endforeach
			</div>
			<!--cat 1 end -->
			<!--cat tab star -->

			<div class="col-md-4">

				<!-- Nav tabs --------------------------------->
				<div class="main_nav">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
								data-toggle="tab">সর্বশেষ সংবাদ </a></li>
						{{-- <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
								data-toggle="tab">জনপ্রিয় সংবাদ</a></li> --}}

					</ul>

					<!-- Tab panes -->

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
                            @foreach ($latest as $latestList)
                            <div class="images_title">
                                <a  wire:click="songleBlog('{{ $latestList->postid }}')" href="javascript:void(0)"><img width="400" height="225"
                                        src="{{ $latestList->image }}"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                        loading="lazy"></a>
                                <h4 class="heading_02"><a  wire:click="songleBlog('{{ $latestList->postid }}')" href="javascript:void(0)">{{ $latestList->title }}</a></h4>
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
							<a
                            wire:click="songleBlog('{{ $latest7List->postid }}')" href="javascript:void(0)"><img
									width="400" height="225"
									src="{{ $latest7List->image }}"
									class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
									loading="lazy" /></a>
							<h3 class="heading_03"><a
                                wire:click="songleBlog('{{ $latest7List->postid }}')" href="javascript:void(0)">{{ $latest7List->title }}</a></h3>
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
							src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif" alt=""
							class="wp-image-10" /></figure>
				</div>
			</div>
			<div class="col-md-6">

				<div class="widget_area">
					<figure class="wp-block-image size-full"><img loading="lazy" width="725" height="100"
							src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif" alt=""
							class="wp-image-10" /></figure>
				</div>
			</div>
		</div>

		<!-- Section 07 (top two div) #################################-->


		<div class="row">

			<!--cat 3 start -->
			<div class="col-md-8">


@if($nationalcount>0)




				<h4 class="catagory_title"><a
						href="javascript:void(0)" wire:click="categoryfun('জাতীয়')" ><i
							class="fa fa-bars"></i> জাতীয় </a></h4>
				<div class="row">
<?php

    $ni = 1;
    ?>
                    @foreach ($national as $national1st)
@if($ni==1)



					<div class="col-md-6">
						<div class="leadnews">
							<a
                            wire:click="songleBlog('{{ $national1st->postid }}')" href="javascript:void(0)"><img
									width="400" height="225"
									src="{{ $national1st->image }}"
									class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
									loading="lazy"

									sizes="(max-width: 400px) 100vw, 400px" /></a>
							<h3 class="heading_01"><a
                                wire:click="songleBlog('{{ $national1st->postid }}')" href="javascript:void(0)">{{ $national1st->title }}</a></h3>
							<p>{{ $national1st->short_description }} <a
									href=' '
									class='readmore'></a><span style="text-align:right"><a
                                        wire:click="songleBlog('{{ $national1st->postid }}')" href="javascript:void(0)">.....আরো
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
                    @if($nii==1)
                    @else


                    <div class="images_title">
						<a
                        wire:click="songleBlog('{{ $nationallist->postid }}')" href="javascript:void(0)"><img
								width="400" height="225"
								src="{{ $nationallist->image }}"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy" /></a>
						<h4 class="heading_02"><a
                            wire:click="songleBlog('{{ $nationallist->postid }}')" href="javascript:void(0)">
                            {{ $nationallist->title }}</a></h4>
					</div>



                        @endif
                        <?php
                        $nii++;
                        ?>
                        @endforeach





					</div>
					<div class="morenews"><a
                        href="javascript:void(0)" wire:click="categoryfun('জাতীয়')" ><i
								class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
							আরো সংবাদ..</a></div>
				</div>
				<!--cat 3 end -->
                @endif  {{--   জাতীয় category --}}
				<!--cat 4 start -->
			</div>
			<div class="col-md-4">
				<div class="internetional">


					<h4 class="catagory_title"><a
							href=""><i
								class="fa fa-bars"></i> আন্তর্জাতিক</a></h4>

					<div class="images_title">
						<a
							href=""><img
								width="400" height="225"
								src="https://dailysavvataralo.com/wp-content/uploads/2022/02/FB_IMG_1645469105399-400x225.jpg"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy" /></a>
						<h4 class="heading_02"><a
								href="">
								অস্ট্রিয়ায় বিক্রমপুর সমিতি উদ্যোগে মাতৃভাষা দিবসে শ্রদ্ধাঞ্জলি</a></h4>
					</div>


					<div class="images_title">
						<a
							href=""><img
								width="400" height="225"
								src="https://dailysavvataralo.com/wp-content/uploads/2022/01/Rasturant-400x225.jpg"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy" /></a>
						<h4 class="heading_02"><a
								href="">
								টিকা ছাড়া রেস্টুরেন্টে খাওয়া যাবে না: স্বাস্থ্যমন্ত্রী</a></h4>
					</div>


					<div class="images_title">
						<a
							href=""><img
								width="400" height="225"
								src="https://dailysavvataralo.com/wp-content/uploads/2022/01/soudi-n2342-400x225.jpg"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy" /></a>
						<h4 class="heading_02"><a
								href="">
								সৌদি আরবে ব্যাপক তুষারপাত, হচ্ছে বৃষ্টিও</a></h4>
					</div>


					<div class="images_title">
						<a href=""><img width="400" height="225"
								src="https://dailysavvataralo.com/wp-content/uploads/2021/12/115044348__115033548_gettyimages-1226314512-400x225.jpg"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy" /></a>
						<h4 class="heading_02"><a href=""> </a></h4>
					</div>


					<div class="images_title">
						<a href=""><img width="400" height="225"
								src="https://dailysavvataralo.com/wp-content/uploads/2021/11/aHR0cHM6Ly93d3cuZGFpbHlqYW5ha2FudGhhLmNvbS9jbG91ZC11cGxvYWRzL2RlZmF1bHQvYXJ0aWNsZS1pbWFnZXMvMjAyMTExLzE2MzU3NTgxOTlfMjQuanBn-400x225.jpg"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy" /></a>
						<h4 class="heading_02"><a href=""> সহজেই জয় পেয়ে
								স্বস্তিতে জাপানের নতুন প্রধানমন্ত্রী কিশিদা</a></h4>
					</div>


					<div class="morenews"><a
							href=""><i
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
							src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif" alt=""
							class="wp-image-10" /></figure>
				</div>
			</div>
			<div class="col-md-6">
				<div class="widget_area">
					<figure class="wp-block-image size-full"><img loading="lazy" width="725" height="100"
							src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif" alt=""
							class="wp-image-10" /></figure>
				</div>
			</div>
		</div>

		<div class="row ads">
			<div class="col-md-12">

			</div>
		</div>

		<!-- Section 09 (top two div) #################################-->

		<div class="row">
			<!--cat 5 start  -->
			<div class="col-md-8">

				<h4 class="catagory_title"> <a
						href=""><i
							class="fa fa-bars"></i> রাজনীতি</a></h4>
				<div class="row">
					<div class="col-md-6">

						<div class="leadnews">
							<a
								href=""><img
									width="400" height="225"
									src="https://dailysavvataralo.com/wp-content/uploads/2022/02/tika_khaleda-770x450-1-400x225.jpg"
									class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
									loading="lazy" /></a>
							<h3 class="heading_01"><a
									href="">কোভিড
									টিকার বুস্টার ডোজ নিলেন খালেদা জিয়া</a></h3>
							<p>করোনা টিকার বুস্টার ডোজ নিলেন বিএনপি চেয়ারপার্সন খালেদা জিয়া। বুধবার বিকাল পৌনে পাঁচটার
								দিকে রাজধানীর মহাখালীতে শেখ রাসেল গ্যাস্ট্রোলিভার হাসপাতালে বুস্টার ডোজ হিসেবে ফাইজারের
								টিকা <a
									href=' '
									class='readmore'></a><span style="text-align:right"><a
										href="">.....আরো
										পড়ুন</a></span></p>
						</div>

					</div>
					<div class="col-md-6">


						<div class="images_title">
							<a href=""><img width="276" height="182"
									src="https://dailysavvataralo.com/wp-content/uploads/2022/02/images.jpg"
									class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
									loading="lazy" /></a>
							<h4 class="heading_02"><a href="">বাঙালী মাথা
									উঁচু করে চলবে</a></h4>
						</div>


						<div class="images_title">
							<a
								href=""><img
									width="400" height="225"
									src="https://dailysavvataralo.com/wp-content/uploads/2022/01/kader-e1607179027331-400x225.jpg"
									class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
									loading="lazy" /></a>
							<h4 class="heading_02"><a
									href="">বিএনপির
									সমাবেশে বাধা নয়, সরকার সহযোগিতা করছে: কাদের</a></h4>
						</div>


						<div class="heading_title">
							<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
									href="">সব
									ষড়যন্ত্র উপড়ে ফেলে আজ পদ্মাসেতু হয়েছে: তথ্যমন্ত্রী</a></h4>
						</div>
						<div class="heading_title">
							<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
									href="">পদ
									হারিয়ে তারেক রহমানকে ধন্যবাদ দিলেন তৈমুর</a></h4>
						</div>
						<div class="heading_title">
							<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
									href="">শ্রীনগর
									ছাত্রলীগের সভাপতি শাওন খান, সম্পাদক প্রিন্স</a></h4>
						</div>
						<div class="heading_title">
							<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
									href="">আ.লীগের
									ধর্ম বিষয়ক উপ-কমিটিতে সদস্য মিজান সরদার</a></h4>
						</div>
						<div class="morenews"><a
								href=""><i
									class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
								আরো সংবাদ..</a></div>
					</div>
				</div>
			</div>
			<!--cat 5 end  -->
			<!--cat 6 start  -->
			<div class="col-md-4">

				<h4 class="catagory_title"> <a
						href=""><i
							class="fa fa-bars"></i> অর্থনীতি</a></h4>


				<div class="leadnews">
					<a
						href=""><img
							width="400" height="225"
							src="https://dailysavvataralo.com/wp-content/uploads/2021/10/porikolpona-minister-400x225.jpg"
							class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
							loading="lazy" /></a>
				</div>
				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">নারী
							শিক্ষায় পিছিয়ে আছি আমরা: পরিকল্পনামন্ত্রী</a></h4>
				</div>
				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">রাসেলের
							রিমান্ড নামঞ্জুর, জেলগেটে জিজ্ঞাসাবাদের নির্দেশ</a></h4>
				</div>

				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">নির্বাচন
							: ১৬০ ইউপি ও ৯ পৌরসভায় ভোটগ্রহণ শুরু</a></h4>
				</div>


				<div class="morenews"><a
						href=""><i
							class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
						আরো সংবাদ..</a></div>

			</div>
			<!--cat 6 end  -->
		</div>

		<!-- Section 10 (top add here) #################################-->
		<div class="row ads">
			<div class="col-md-6">
				<div class="widget_area">
					<figure class="wp-block-image size-full"><img loading="lazy" width="725" height="100"
							src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif" alt=""
							class="wp-image-10" /></figure>
				</div>
			</div>
			<div class="col-md-6">
				<div class="widget_area">
					<figure class="wp-block-image size-full"><img loading="lazy" width="725" height="100"
							src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif" alt=""
							class="wp-image-10" /></figure>
				</div>
			</div>
		</div>
		<!-- Section 11 (top three div) #################################-->

		<div class="row">
			<!-- cat 7 start -->
			<div class="col-md-4">
				<h4 class="catagory_title"> <a
						href=""><i
							class="fa fa-bars"></i> শিল্প-সাহিত্য</a></h4>

				<div class="leadnews">
					<a
						href=""><img
							width="400" height="225"
							src="https://dailysavvataralo.com/wp-content/uploads/2021/10/Taliban-1-400x225.jpg"
							class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
							loading="lazy" /></a>
				</div>
				<div class="heading_title">
					<h4 class="heading_02"> <a
							href="">ভয়ে
							মাটিতে পুঁতে ফেলছেন আঁকা ছবি আফগান চিত্রশিল্পী</a></h4>
				</div>


				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">আজীবন
							সম্মাননা পেলেন কিংবদন্তী শিল্পী রুনা লায়লা</a></h4>
				</div>
				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">একুশে
							পদক প্রাপ্ত সঙ্গীত শিল্পী জুলহাসউদ্দীন আহমেদ না ফেরার দেশে</a></h4>
				</div>
				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">কাঠের বাইসাইকেল তৈরি করে তাক লাগালেন
							কাঠমিস্ত্রি</a></h4>
				</div>
				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">নির্বাচন
							: ১৬০ ইউপি ও ৯ পৌরসভায় ভোটগ্রহণ শুরু</a></h4>
				</div>

				<div class="morenews"><a
						href=""><i
							class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
						আরো সংবাদ..</a></div>


			</div>
			<!-- cat 7 end -->
			<!-- cat 8 start -->
			<div class="col-md-4">


				<h4 class="catagory_title"> <a
						href=""><i
							class="fa fa-bars"></i> খেলাধুলা</a></h4>

				<div class="leadnews">
					<a href=""><img width="400" height="225"
							src="https://dailysavvataralo.com/wp-content/uploads/2022/02/fads7723-400x225.jpg"
							class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy"
							srcset="https://dailysavvataralo.com/wp-content/uploads/2022/02/fads7723-400x225.jpg 400w, https://dailysavvataralo.com/wp-content/uploads/2022/02/fads7723-300x168.jpg 300w, https://dailysavvataralo.com/wp-content/uploads/2022/02/fads7723-768x431.jpg 768w, https://dailysavvataralo.com/wp-content/uploads/2022/02/fads7723.jpg 860w"
							sizes="(max-width: 400px) 100vw, 400px" /></a>
				</div>
				<div class="heading_title">
					<h4 class="heading_02"><a href="">টাইগারদের অবিশ্বাস্য
							জয়</a></h4>
				</div>

				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">টস হেরে বোলিংয়ে বাংলাদেশ</a></h4>
				</div>

				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">আফগানিস্তানের বিপক্ষে স্কোয়াড ঘোষণা
							করেছে বাংলাদেশ</a></h4>
				</div>

				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">এবার সেমিফাইনাল রোমাঞ্চের অপেক্ষা</a>
					</h4>
				</div>

				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">লিভারপুলের
							অজেয় পথচলা থামাল ওয়েস্ট হ্যাম</a></h4>
				</div>


				<div class="morenews"><a
						href=""><i
							class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
						আরো সংবাদ..</a></div>
			</div>

			<!-- cat 8 end -->
			<!-- cat 9 start -->
			<div class="col-md-4">

				<h4 class="catagory_title"> <a
						href=""><i
							class="fa fa-bars"></i> বিনোদন</a></h4>


				<div class="leadnews">
					<a
						href=""><img
							width="400" height="225"
							src="https://dailysavvataralo.com/wp-content/uploads/2022/02/InShot_20220225_110458238-400x225.jpg"
							class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy"
							srcset="https://dailysavvataralo.com/wp-content/uploads/2022/02/InShot_20220225_110458238-400x225.jpg 400w, https://dailysavvataralo.com/wp-content/uploads/2022/02/InShot_20220225_110458238-300x169.jpg 300w, https://dailysavvataralo.com/wp-content/uploads/2022/02/InShot_20220225_110458238-1024x576.jpg 1024w, https://dailysavvataralo.com/wp-content/uploads/2022/02/InShot_20220225_110458238-768x432.jpg 768w, https://dailysavvataralo.com/wp-content/uploads/2022/02/InShot_20220225_110458238-1536x863.jpg 1536w, https://dailysavvataralo.com/wp-content/uploads/2022/02/InShot_20220225_110458238-2048x1151.jpg 2048w"
							sizes="(max-width: 400px) 100vw, 400px" /></a>
				</div>
				<div class="heading_title">
					<h4 class="heading_02"><a
							href="">নতুন
							গানে দুই সহোদর</a></h4>
				</div>


				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">মুন্সীগঞ্জে
							অনিয়মিত সাহিত্য ও সাংস্কৃতিক গোষ্ঠির নতুন কমিটি</a></h4>
				</div>

				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">সংগীত
							জগতে নতুন কিছু কাজ করতে চাই আমি&#8221;</a></h4>
				</div>

				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">ওভিসি
							পরিচালনা দিয়ে আনিছ সিকদারের নতুন বছরের যাত্রা শুরু</a></h4>
				</div>

				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a
							href="">মুন্সীগঞ্জে
							নতুন নাট্যদল বিক্রমপুর থিয়েটারের আত্মপ্রকাশ</a></h4>
				</div>


				<div class="morenews"><a
						href=""><i
							class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
						আরো সংবাদ..</a></div>

			</div>
			<!-- cat 9 end -->
		</div>

		<!-- Section 12 (top add here) #################################-->
		<div class="row ads">
			<div class="col-md-6">
				<div class="widget_area">
					<figure class="wp-block-image size-full"><img loading="lazy" width="725" height="100"
							src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif" alt=""
							class="wp-image-10" /></figure>
				</div>
			</div>
			<div class="col-md-6">
				<div class="widget_area">
					<figure class="wp-block-image size-full"><img loading="lazy" width="725" height="100"
							src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif" alt=""
							class="wp-image-10" /></figure>
				</div>
			</div>
		</div>

		<!-- Section 13 (top six div) #################################-->


		<div class="row">
			<div class="col-md-12">
				<!-- cat 10 start  -->
				<div class="big-images-02">
					<h4 class="catagory_title"> <a
							href=""><i
								class="fa fa-bars"></i>শিল্প-সাহিত্য</a></h4>
					<div class="row">


						<div class="col-md-2">
							<div class="big_images">
								<a
									href=""><img
										width="400" height="225"
										src="https://dailysavvataralo.com/wp-content/uploads/2021/10/Taliban-1-400x225.jpg"
										class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
										loading="lazy" /></a>
								<h3 class="heading_03"><a
										href="">ভয়ে
										মাটিতে পুঁতে ফেলছেন আঁকা ছবি আফগান চিত্রশিল্পী</a></h3>
							</div>
						</div>


						<div class="col-md-2">
							<div class="big_images">
								<a
									href=""><img
										width="400" height="225"
										src="https://dailysavvataralo.com/wp-content/uploads/2021/10/124836image-365536-1605595714-400x225.jpg"
										class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
										loading="lazy" /></a>
								<h3 class="heading_03"><a
										href="">আজীবন
										সম্মাননা পেলেন কিংবদন্তী শিল্পী রুনা লায়লা</a></h3>
							</div>
						</div>


						<div class="col-md-2">
							<div class="big_images">
								<a
									href=""><img
										width="400" height="225"
										src="https://dailysavvataralo.com/wp-content/uploads/2021/09/IMG_20210924_215535-400x225.jpg"
										class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
										loading="lazy"
										srcset="https://dailysavvataralo.com/wp-content/uploads/2021/09/IMG_20210924_215535-400x225.jpg 400w, https://dailysavvataralo.com/wp-content/uploads/2021/09/IMG_20210924_215535-300x169.jpg 300w, https://dailysavvataralo.com/wp-content/uploads/2021/09/IMG_20210924_215535-1024x575.jpg 1024w, https://dailysavvataralo.com/wp-content/uploads/2021/09/IMG_20210924_215535-768x432.jpg 768w, https://dailysavvataralo.com/wp-content/uploads/2021/09/IMG_20210924_215535.jpg 1050w"
										sizes="(max-width: 400px) 100vw, 400px" /></a>
								<h3 class="heading_03"><a
										href="">একুশে
										পদক প্রাপ্ত সঙ্গীত শিল্পী জুলহাসউদ্দীন আহমেদ না ফেরার দেশে</a></h3>
							</div>
						</div>


						<div class="col-md-2">
							<div class="big_images">
								<a href=""><img width="400" height="225"
										src="https://dailysavvataralo.com/wp-content/uploads/2021/09/61-2109181712-400x225.jpg"
										class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
										loading="lazy" /></a>
								<h3 class="heading_03"><a href="">কাঠের
										বাইসাইকেল তৈরি করে তাক লাগালেন কাঠমিস্ত্রি</a></h3>
							</div>
						</div>


						<div class="col-md-2">
							<div class="big_images">
								<a
									href=""><img
										width="400" height="225"
										src="https://dailysavvataralo.com/wp-content/uploads/2021/09/160-UP-and-9-upzila-Election-400x225.jpg"
										class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
										loading="lazy" /></a>
								<h3 class="heading_03"><a
										href="">নির্বাচন
										: ১৬০ ইউপি ও ৯ পৌরসভায় ভোটগ্রহণ শুরু</a></h3>
							</div>
						</div>


						<div class="col-md-2">
							<div class="big_images">
								<a
									href=""><img
										width="400" height="225"
										src="https://dailysavvataralo.com/wp-content/uploads/2021/09/PSG-win-2-1-Olympique-Lyon-400x225.jpg"
										class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
										loading="lazy" /></a>
								<h3 class="heading_03"><a
										href="">নেইমার-ইকার্দির
										গোলে পিএসজির জয়</a></h3>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- cat 10 end  -->
		</div>

		<!-- Section 14 (top three div) #################################-->

		<div class="row">
			<!-- cat 11 start  -->
			<div class="col-md-12">

				<h4 class="catagory_title"> <a
						href=""><i
							class="fa fa-bars"></i> খেলাধুলা</a></h4>
			</div>
			<div class="col-md-5">


				<div class="leadnews">
					<a href="">
						<div class="full_images"><img width="400" height="225"
								src="https://dailysavvataralo.com/wp-content/uploads/2022/02/fads7723-400x225.jpg"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy"
								srcset="https://dailysavvataralo.com/wp-content/uploads/2022/02/fads7723-400x225.jpg 400w, https://dailysavvataralo.com/wp-content/uploads/2022/02/fads7723-300x168.jpg 300w, https://dailysavvataralo.com/wp-content/uploads/2022/02/fads7723-768x431.jpg 768w, https://dailysavvataralo.com/wp-content/uploads/2022/02/fads7723.jpg 860w"
								sizes="(max-width: 400px) 100vw, 400px" /></div>
					</a>
					<h3 class="heading_01"><a href="">টাইগারদের অবিশ্বাস্য
							জয়</a></h3>
					<p>হয়তো থেমে গেছে বঙ্গোপসাগরে জলের তর্জন-গর্জন! কারণ সাগরিকার ২২ গজের শক্ত মাটিতে টাইগারদের গর্জনে
						উঠে গেছে ঢেউ। এমন ঘটনা আরব্য রজনীর রূপকথাতেই হয়তো সম্ভবপর হতে পারে। আফিফ হোসেন ধ্রুব আর মেহেদি
						হাসান মিরাজ রেকর্ড বুক তোলপাড় করা ঘটনার জন্ম দিয়েছেন <a
							href=' ' class='readmore'></a><span
							style="text-align:right"><a href="">.....আরো
								পড়ুন</a></span></p>
				</div>

			</div>
			<div class="col-md-3">

				<div class="big_images">
					<a href=""><img width="400" height="225"
							src="https://dailysavvataralo.com/wp-content/uploads/2022/02/aHR0cHM6Ly93d3cuZGFpbHlqYW5ha2FudGhhLmNvbS9jbG91ZC11cGxvYWRzL2RlZmF1bHQvYXJ0aWNsZS1pbWFnZXMvMjAyMjAyLzE2NDU1OTY0NzhfMDEucG5n-400x225.jpg"
							class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
							loading="lazy" /></a>
					<h3 class="heading_03"><a href="">টস হেরে বোলিংয়ে
							বাংলাদেশ</a></h3>
				</div>

				<div class="big_images">
					<a href=""><img width="400" height="225"
							src="https://dailysavvataralo.com/wp-content/uploads/2022/02/aHR0cHM6Ly93d3cuZGFpbHlqYW5ha2FudGhhLmNvbS9jbG91ZC11cGxvYWRzL2RlZmF1bHQvYXJ0aWNsZS1pbWFnZXMvMjAyMjAyLzE2NDQ4NDU5MzNfNjQuanBn-400x225.jpg"
							class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
							loading="lazy" /></a>
					<h3 class="heading_03"><a href="">আফগানিস্তানের বিপক্ষে
							স্কোয়াড ঘোষণা করেছে বাংলাদেশ</a></h3>
				</div>

			</div>
			<div class="col-md-4">
				<div class="internetional">


					<div class="images_title">
						<a href=""><img width="400" height="225"
								src="https://dailysavvataralo.com/wp-content/uploads/2021/11/aHR0cHM6Ly93d3cuZGFpbHlqYW5ha2FudGhhLmNvbS9jbG91ZC11cGxvYWRzL2RlZmF1bHQvYXJ0aWNsZS1pbWFnZXMvMjAyMTExLzE2MzYzOTU2ODZfc3AtMS5naWY-400x225.jpg"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy" /></a>
						<h4 class="heading_02"><a href="">এবার সেমিফাইনাল
								রোমাঞ্চের অপেক্ষা</a></h4>
					</div>


					<div class="images_title">
						<a
							href=""><img
								width="400" height="225"
								src="https://dailysavvataralo.com/wp-content/uploads/2021/11/aHR0cHM6Ly93d3cuZGFpbHlqYW5ha2FudGhhLmNvbS9jbG91ZC11cGxvYWRzL2RlZmF1bHQvYXJ0aWNsZS1pbWFnZXMvMjAyMTExLzE2MzYzNTY2MzZfMTcuanBn-400x225.jpg"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy" /></a>
						<h4 class="heading_02"><a
								href="">লিভারপুলের
								অজেয় পথচলা থামাল ওয়েস্ট হ্যাম</a></h4>
					</div>


					<div class="images_title">
						<a
							href=""><img
								width="400" height="225"
								src="https://dailysavvataralo.com/wp-content/uploads/2021/10/riyad-291021-01-400x225.jpg"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy" /></a>
						<h4 class="heading_02"><a
								href="">আমার
								দোষ, শেষ বলে পারিনি: মাহমুদউল্লাহ</a></h4>
					</div>


					<div class="images_title">
						<a
							href=""><img
								width="400" height="225"
								src="https://dailysavvataralo.com/wp-content/uploads/2021/10/pakistan-291021-02-400x225.jpg"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy" /></a>
						<h4 class="heading_02"><a
								href="">আসিফের
								শেষের ঝড়ে আফগানিস্তানকে হারাল পাকিস্তান</a></h4>
					</div>


					<div class="images_title">
						<a
							href=""><img
								width="400" height="225"
								src="https://dailysavvataralo.com/wp-content/uploads/2021/10/asif-301021-01-400x225.jpg"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy" /></a>
						<h4 class="heading_02"><a
								href="">এক
								ওভারে ২৫ নেওয়ার আত্মবিশ্বাস ছিল আসিফের</a></h4>
					</div>


					<div class="morenews"><a
							href=""><i
								class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
							আরো সংবাদ..</a></div>


				</div>
			</div>
		</div>
		<!-- cat 11 end  -->
		<!-- Section 15 (top three div) #################################-->
		<!-- cat 12 start  -->
		<div class="row">
			<div class="col-md-12">


				<h4 class="catagory_title"> <a
						href=""><i
							class="fa fa-bars"></i> বিনোদন</a></h4>

			</div>
			<div class="col-md-6">

				<div class="leadnews">
					<a
						href="">
						<div class="full_images"><img width="400" height="225"
								src="https://dailysavvataralo.com/wp-content/uploads/2022/02/InShot_20220225_110458238-400x225.jpg"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy"
								srcset="https://dailysavvataralo.com/wp-content/uploads/2022/02/InShot_20220225_110458238-400x225.jpg 400w, https://dailysavvataralo.com/wp-content/uploads/2022/02/InShot_20220225_110458238-300x169.jpg 300w, https://dailysavvataralo.com/wp-content/uploads/2022/02/InShot_20220225_110458238-1024x576.jpg 1024w, https://dailysavvataralo.com/wp-content/uploads/2022/02/InShot_20220225_110458238-768x432.jpg 768w, https://dailysavvataralo.com/wp-content/uploads/2022/02/InShot_20220225_110458238-1536x863.jpg 1536w, https://dailysavvataralo.com/wp-content/uploads/2022/02/InShot_20220225_110458238-2048x1151.jpg 2048w"
								sizes="(max-width: 400px) 100vw, 400px" /></div>
					</a>
					<h3 class="heading_01"><a
							href="">নতুন
							গানে দুই সহোদর</a></h3>
					<p>&nbsp; বিনোদন প্রতিবেদক : অনলাইন প্লাটফর্মে অচিরেই প্রকাশিত হচ্ছে দুই সহোদর রেজাউল করিম এবং
						দিদারুল করিমের নতুন আধুনিক এবং ফোক <a
							href=' '
							class='readmore'></a><span style="text-align:right"><a
								href="">.....আরো
								পড়ুন</a></span></p>
				</div>

			</div>
			<div class="col-md-3">

				<div class="big_images">
					<a
						href="">
						<div class="full_images"><img width="400" height="225"
								src="https://dailysavvataralo.com/wp-content/uploads/2022/02/Polish_20220222_103045961-400x225.jpg"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy"
								srcset="https://dailysavvataralo.com/wp-content/uploads/2022/02/Polish_20220222_103045961-400x225.jpg 400w, https://dailysavvataralo.com/wp-content/uploads/2022/02/Polish_20220222_103045961-300x168.jpg 300w"
								sizes="(max-width: 400px) 100vw, 400px" /></div>
					</a>
					<h3 class="heading_03"><a
							href="">মুন্সীগঞ্জে
							অনিয়মিত সাহিত্য ও সাংস্কৃতিক গোষ্ঠির নতুন কমিটি</a></h3>
				</div>
				<div class="big_images">
					<a
						href="">
						<div class="full_images"><img width="400" height="225"
								src="https://dailysavvataralo.com/wp-content/uploads/2022/02/Gallery_1645119249339-400x225.jpeg"
								class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
								loading="lazy" /></div>
					</a>
					<h3 class="heading_03"><a
							href="">সংগীত
							জগতে নতুন কিছু কাজ করতে চাই আমি&#8221;</a></h3>
				</div>
			</div>
			<div class="col-md-3">

				<div class="big_images">
					<a
						href=""><img
							width="400" height="225"
							src="https://dailysavvataralo.com/wp-content/uploads/2022/01/IMG-20220129-WA0008-400x225.jpg"
							class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy"
							srcset="https://dailysavvataralo.com/wp-content/uploads/2022/01/IMG-20220129-WA0008-400x225.jpg 400w, https://dailysavvataralo.com/wp-content/uploads/2022/01/IMG-20220129-WA0008-300x169.jpg 300w, https://dailysavvataralo.com/wp-content/uploads/2022/01/IMG-20220129-WA0008-1024x576.jpg 1024w, https://dailysavvataralo.com/wp-content/uploads/2022/01/IMG-20220129-WA0008-768x432.jpg 768w, https://dailysavvataralo.com/wp-content/uploads/2022/01/IMG-20220129-WA0008.jpg 1280w"
							sizes="(max-width: 400px) 100vw, 400px" /></a>
					<h3 class="heading_03"><a
							href="">ওভিসি
							পরিচালনা দিয়ে আনিছ সিকদারের নতুন বছরের যাত্রা শুরু</a></h3>
				</div>

				<div class="big_images">
					<a
						href=""><img
							width="400" height="225"
							src="https://dailysavvataralo.com/wp-content/uploads/2021/12/IMG_20211222_155516-400x225.jpg"
							class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy"
							srcset="https://dailysavvataralo.com/wp-content/uploads/2021/12/IMG_20211222_155516-400x225.jpg 400w, https://dailysavvataralo.com/wp-content/uploads/2021/12/IMG_20211222_155516-300x169.jpg 300w, https://dailysavvataralo.com/wp-content/uploads/2021/12/IMG_20211222_155516-1024x576.jpg 1024w, https://dailysavvataralo.com/wp-content/uploads/2021/12/IMG_20211222_155516-768x432.jpg 768w, https://dailysavvataralo.com/wp-content/uploads/2021/12/IMG_20211222_155516-1536x864.jpg 1536w, https://dailysavvataralo.com/wp-content/uploads/2021/12/IMG_20211222_155516-2048x1152.jpg 2048w"
							sizes="(max-width: 400px) 100vw, 400px" /></a>
					<h3 class="heading_03"><a
							href="">মুন্সীগঞ্জে
							নতুন নাট্যদল বিক্রমপুর থিয়েটারের আত্মপ্রকাশ</a></h3>
				</div>

			</div>
		</div>
		<!-- cat 12 end -->








<!-- Contant End -->


    @endif


</div>
