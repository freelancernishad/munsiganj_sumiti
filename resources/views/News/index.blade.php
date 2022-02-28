<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('news/assets/css/style.css') }}" media="all" />

    <title>Dailysavvataralo</title>

    <link rel='stylesheet' id='wp-block-library-css' href='{{ asset('news/assets/css/style.min.css') }}' type='text/css' media='all' />
    <style id='global-styles-inline-css' type='text/css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }
    </style>
    <link rel='stylesheet' id='t4bnewsticker-css' href='{{ asset('news/assets/css/t4bnewsticker.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='{{ asset('news/assets/css/bootstrap.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='menu-css' href='{{ asset('news/assets/css/menu.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='{{ asset('news/assets/css/style1.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css' href='{{ asset('news/assets/css/responsive.css') }}' type='text/css' media='all' />

    <link rel="stylesheet" href="{{ asset('news/assets/css/theme.css') }}">
    <livewire:styles />
</head>

<body>

    <div class="container full_website">

        <!-- Section 01 (Header) #################################-->

        <div class="header">
            <div class="border">
                <div class="row date-social">
                    <div class="headin-padding">
                        <div class="col-md-6 date">
                            <i class="fa fa-calendar-o "></i>


                            আজ ২৭শে ফেব্রুয়ারি, ২০২২ খ্রিস্টাব্দ, ১৪ই ফাল্গুন, ১৪২৮ বঙ্গাব্দ

                        </div>


                        <div class="col-md-6 social">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter" style="color:#5DA7DA;"></i></a>
                            <a href="#"><i class="fa fa-google-plus" style="color:#D1483B;"></i></a>
                            <a href="#"><i class="fa fa-youtube" style="color:#C41A1E;"></></i></a>
                            <a href="#"><i class="fa fa-android" style="color:#A5D11C;"></i></a>
                            <a href="#"><i class="fa fa-rss" style="color:#FB7629;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 02 (Header-logo&bannar) #################################-->

        <div class="row logo_banner">
            <div class="col-md-4 logo">
                <a href=""><img src="https://dailysavvataralo.com/wp-content/uploads/2021/09/logo.jpeg" alt=""
                        width="100%" /></a>
            </div>
            <div class="col-md-8 bannar">
                <a href="#"><img src="https://dailysavvataralo.com/wp-content/uploads/2021/09/biggapon-1.gif" alt=""
                        width="100%" /></a>
            </div>
        </div>


        <!-- Section 03 (nav-bar) #################################-->



<livewire:blog-page>

<!-- Section 19 (footer) #################################-->
<footer>
    <div class="footer-04">
        <div class="row">
            <div class="col-md-3">
                <a href=""><img src="https://dailysavvataralo.com/wp-content/uploads/2021/09/logo.jpeg" alt="images"
                        width="100%" height="100%" /></a>
            </div>
            <div class="col-md-4 text">
                <span
                    style="color: #050505; font-family: system-ui, -apple-system, system-ui, '.SFNSText-Regular', sans-serif; font-size: 15px;">দৈনিক
                    সভ্যতার আলো: </span>
            </div>
            <div class="col-md-4 text">
                শামীম প্রিন্টিং প্রেস থেকে মুদ্রণ এবং মুন্সীগঞ্জের মানিকপুর থেকে সম্পাদক কর্তৃক প্রকাশিত।
                মোবাইলঃ ০১৯৭১-২৩৪৩১১, ০১৭১২-৯১৫৪৫১
                ই-মেইল: savvataralo@gmail.com, </div>
        </div>
    </div>
    <div class="footer">
        <div class="row">
            <div class="col-md-6">
                <div class="copyright">All rights reserved. © 2021 dailysavvataralo</div>
            </div>
            <div class="col-md-6">
                <div class="design">Developed by <a href="https://sbtechbd.github.io/">Sbtechbd Technology</a>
                </div>
            </div>
        </div>
    </div>
    <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style"
        style="left:0px;top:100px;background-color:transparent"><a class="a2a_button_facebook"
            href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fdailysavvataralo.com%2F&amp;linkname=Dailysavvataralo"
            title="Facebook" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_twitter"
            href="https://www.addtoany.com/add_to/twitter?linkurl=https%3A%2F%2Fdailysavvataralo.com%2F&amp;linkname=Dailysavvataralo"
            title="Twitter" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_linkedin"
            href="https://www.addtoany.com/add_to/linkedin?linkurl=https%3A%2F%2Fdailysavvataralo.com%2F&amp;linkname=Dailysavvataralo"
            title="LinkedIn" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_email"
            href="https://www.addtoany.com/add_to/email?linkurl=https%3A%2F%2Fdailysavvataralo.com%2F&amp;linkname=Dailysavvataralo"
            title="Email" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_print"
            href="https://www.addtoany.com/add_to/print?linkurl=https%3A%2F%2Fdailysavvataralo.com%2F&amp;linkname=Dailysavvataralo"
            title="Print" rel="nofollow noopener" target="_blank"></a><a
            class="a2a_dd addtoany_share_save addtoany_share" href="https://www.addtoany.com/share"></a></div>
    <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style"
        style="bottom:0px;left:0px;background-color:transparent"><a class="a2a_button_facebook"
            href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fdailysavvataralo.com%2F&amp;linkname=Dailysavvataralo"
            title="Facebook" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_twitter"
            href="https://www.addtoany.com/add_to/twitter?linkurl=https%3A%2F%2Fdailysavvataralo.com%2F&amp;linkname=Dailysavvataralo"
            title="Twitter" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_linkedin"
            href="https://www.addtoany.com/add_to/linkedin?linkurl=https%3A%2F%2Fdailysavvataralo.com%2F&amp;linkname=Dailysavvataralo"
            title="LinkedIn" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_email"
            href="https://www.addtoany.com/add_to/email?linkurl=https%3A%2F%2Fdailysavvataralo.com%2F&amp;linkname=Dailysavvataralo"
            title="Email" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_print"
            href="https://www.addtoany.com/add_to/print?linkurl=https%3A%2F%2Fdailysavvataralo.com%2F&amp;linkname=Dailysavvataralo"
            title="Print" rel="nofollow noopener" target="_blank"></a><a
            class="a2a_dd addtoany_share_save addtoany_share" href="https://www.addtoany.com/share"></a></div>
</footer>
</div>

</section>
<script src="https://kit.fontawesome.com/8cffe8c664.js" crossorigin="anonymous"></script>
<script type='text/javascript' async src='{{ asset('news/assets/js/page.js') }}' id='addtoany-core-js'></script>
<script type='text/javascript' src='{{ asset('news/assets/js/jquery.min.js') }}' id='jquery-core-js'></script>
<script type='text/javascript' src='{{ asset('news/assets/js/jquery.liscroll.js') }}' id='liscroll-js'></script>
<script type='text/javascript' src='{{ asset('news/assets/js/bootstrap.min.js') }}' id='bootstrap-js'></script>

<script type="text/javascript">
    jQuery(function() {
        jQuery("ul#ticker").liScroll({
            travelocity: 0.08,
        });
    });
    </script>
<livewire:scripts />
</body>

</html>