

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



                                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                    id="menu-item-19"
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-19 active">
                                    <a title="হোম"  href="{{ url('blogs') }}">হোম</a>
                                </li>


                                @foreach ($catMenu as $catMenuList)


                                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                    id="menu-item-21"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-21"><a
                                        title="{{ $catMenuList->name }}"  href="{{ url('blogs?category='.$catMenuList->name) }}"  >{{ $catMenuList->name }}</a>
                                </li>
                                @endforeach

                                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                    id="menu-item-19"
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-19">
                                    <a title="হোম"  href="{{ url('/') }}">Back to main page</a>
                                </li>


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

                <li><a href="" title="{{ $latestListslide->title }}">{{ $latestListslide->title }}</a>
                </li>


                    @endforeach

            </ul>

        </div> <!-- .ticker-news -->
