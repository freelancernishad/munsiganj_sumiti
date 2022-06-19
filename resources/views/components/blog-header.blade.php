<!-- navbar start -->
<div class="col-md-12" style="margin-bottom:5px">
    <div class="row" id="nav">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <div class="menu-menu-container">
                    <ul id="menu-menu" class="nav navbar-nav">

                        <li itemscope="itemscope" id="menu-item-19"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-19">
                            <a title="হোম" href="{{ url('/') }}">Home</a>
                        </li>


                        <li itemscope="itemscope" id="menu-item-19"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-19 active">
                            <a title="হোম" href="{{ url('blogs') }}">মূল পাতা</a>
                        </li>


                        @foreach ($catMenu as $catMenuList)
                            @if ($catMenuList->parent == '')
                                <li itemscope="itemscope" id="menu-item-21"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-21"><a
                                        title="{{ $catMenuList->name }}"
                                        href="{{ url('blogs?category=' . $catMenuList->name) }}">{{ $catMenuList->name }}</a>
                                </li>
                            @elseif($catMenuList->parent == 'has')
                                @php

                                    $PDO = \DB::connection()->getPdo();
                                    $QUERY = $PDO->prepare('SELECT * FROM `categories` WHERE `parent`='$catMenuList->name'');
                                    $QUERY->execute();
                                    $categores = $QUERY->fetchAll(PDO::FETCH_OBJ);
                                    // dd($categores);
                                @endphp
                                <li itemscope="itemscope"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-28 dropdown">
                                    <a title="{{ $catMenuList->name }}" href="#" data-toggle="dropdown"
                                        class="dropdown-toggle" aria-haspopup="true"
                                        aria-expanded="true">{{ $catMenuList->name }} <span class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">



                                        @foreach ($categores as $subcate)
                                            <li itemscope="itemscope" id="menu-item-29"
                                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-29">
                                                <a title="মুন্সীগঞ্জ"
                                                    href="{{ url('blogs?category=' . $subcate->name) }}">{{ $subcate->name }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                            @endif
                        @endforeach



                    </ul>
                </div>

            </div>
        </nav>
    </div>
</div>

<div class="ticker-news">
    <span>সর্বশেষ সংবাদ :</span>
    <ul id="ticker" class="js-hidden newsticker">


        @foreach ($latestnews as $latestListslide)
            <li><a href="{{ url('/blogs?blog=' . $latestListslide->postid) }}"
                    title="{{ $latestListslide->title }}">{{ $latestListslide->title }}</a>
            </li>
        @endforeach

    </ul>

</div> <!-- .ticker-news -->
