<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bikes To Bookes</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto%3A400%2C700%2C900%7CPoppins%3A700%2C400%2C900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/animations/animations.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/main/frontend-legacy.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/frontend.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/post-15.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/global.css?ver=1625393460')}}">

    <link rel="stylesheet" href="{{asset('assets/css/main/post-7.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/post-23.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/post-235.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/post-24.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/post-7835.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/post-738.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/frontend-lite.min.css')}}">


    <link rel="stylesheet" href="{{asset('assets/css/vendors/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/blog.css?ver=3.0.2')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/master.css?ver=3.0.2')}}">

    <style id='carrental-master-inline-css' type='text/css'>
        body {
            font-family: "BlinkMacSystemFont,-apple-system,Segoe UI,Roboto,Helvetica,Arial,sans-serif";
            color: #777777;
            line-height: 1.625;
            font-size: 16px;
            font-weight: 400;
        }

        .entry-header .entry-title a:hover,
        .sidebar ul li a:hover {
            color: #ffbf00;
            transition: all ease 500ms;
        }

        .header ul.navbar-nav>li>a:hover,
        .header ul.navbar-nav>li>a.active,
        .header ul.navbar-nav>li>a:focus {
            color: #ffbf00;
        }

        /*******************MY STYLE***********************/

        select.form-control:not([size]):not([multiple]) {
            height: inherit;
        }

        input[type=checkbox],
        input[type=radio] {
            padding: inherit;
        }

        section[data-id="ec71628"] {
            border-bottom: 3px solid #ffbf00;
        }

        .elementor-23 .elementor-element.elementor-element-ec71628 {
            margin-bottom: 0px !important;
        }

        .ekit-wid-con .ekit-mail-submit {
            line-height: 22px !important;
        }



        /*******************MY STYLE***********************/

        .xs_btn_float_right_1 {
            text-align: center;
        }

        .toolbar-area {
            background-color: #dbdbdb;
            height: 2px;
        }

        .entry-header .entry-title a,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .post .entry-header .entry-title a {
            color: #1a1a1a;

        }

        ul.navbar-nav li .dropdown-menu li a:hover,
        .xs-service .xs-service-box .xs-service-box-info .xs-title a:hover,
        .recent-folio-menu ul li.active,
        .xs-footer .footer-left-widget ul li span,
        .xs-footer .footer-widget ul li a:hover,
        .copyright span a,
        .xs-latest-news .single-latest-news .single-news-content .ts-post-title a:hover,
        .xs-top-bar .top-bar .header-nav-right-info li i.fa,
        .xs-nav-classic .header-nav-right-info li i,
        .sidebar .widget .media-body .entry-title a:hover,
        .header ul.navbar-nav li .dropdown-menu li a:hover,
        .header ul.navbar-nav li .dropdown-menu li a.active,
        .btn:hover,
        .readmore-btn-area a,
        .post .entry-header .entry-title a:hover,
        .wp-block-quote:before .woocommerce ul.products li.product .price,
        .woocommerce ul.products li.product .woocommerce-loop-product__title:hover,
        .wp-block-quote:before {
            color: #ffbf00;
        }


        .btn-primary,
        .recent-folio-menu ul li.active,
        .copyright .footer-social ul li a:hover,
        .testimonial-footer:after,
        .btn-border-dark:hover,
        .ts-working-box:hover .working-icon-wrapper,
        .header ul.navbar-nav>li:hover>a:before,
        .header ul.navbar-nav>li.active>a:before,
        .blog-post-comment .comment-respond .comment-form .form-control:focus,
        .qutoe-form-inner.ts-qoute-form .form-control:focus {
            border-color: #ffbf00;
        }

        .recent-folio-menu ul li.active:after,
        .ts-latest-news .single-latest-news {
            border-bottom-color: #ffbf00;
        }

        .nav-classic .main-logo a:after {
            border-top-color: #ffbf00;
        }

        .btn-primary:hover,
        .post .post-footer .readmore:hover,
        .input-group-btn.search-button:hover,
        .sidebar .widget.widget_search .input-group-btn:hover,
        .btn-comments.btn btn-primary,
        .search .page .post-footer .readmore:hover,
        .post .post-footer .readmore:hover,
        .sidebar .widget.widget_search .input-group-append:hover {
            background: #FF4C30;
            border-color: #FF4C30;
        }

        blockquote.wp-block-quote,
        .wp-block-quote,
        .wp-block-quote:not(.is-large):not(.is-style-large),
        .wp-block-pullquote blockquote,
        blockquote.wp-block-pullquote,
        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large {
            border-left-color: #ffbf00;
        }

        .entry-header .entry-title a:hover,
        .sidebar ul li a:hover,
        .woocommerce ul.products li.product .price {
            color: #FF4C30;
        }

        .single-intro-text .count-number,
        .sticky.post .meta-featured-post,
        .sidebar .widget .widget-title:before,
        .pagination li.active a,
        .pagination li:hover a,
        .pagination li.active a:hover,
        .pagination li:hover a:hover,
        .sidebar .widget.widget_search .input-group-btn,
        .tag-lists a:hover,
        .tagcloud a:hover,
        .back_to_top,
        .ticket-btn.btn:hover,
        .navbar-container .navbar-light .navbar-nav>li>a:before,
        .nav-button,
        .btn-primary,
        .single-recent-work .link-more,
        .ts-team-slider .owl-nav .owl-prev:hover i,
        .ts-team-slider .owl-nav .owl-next:hover i,
        .ts-footer-info-box,
        .working-process-number,
        .copyright .footer-social ul li a:hover,
        .btn-border-dark:hover,
        .nav-classic .main-logo a:before,
        .btn,
        .main-logo,
        .hero-area.owl-carousel.owl-theme .owl-nav [class*=owl-]:hover,
        .post .post-footer .readmore,
        .post .post-media .video-link-btn a,
        .woocommerce ul.products li.product .button,
        .woocommerce ul.products li.product .added_to_cart,
        .woocommerce nav.woocommerce-pagination ul li a:focus,
        .woocommerce nav.woocommerce-pagination ul li a:hover,
        .woocommerce nav.woocommerce-pagination ul li span.current,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .woocommerce ul.products li.product span.onsale,
        .woocommerce span.onsale,
        .sidebar .widget.widget_search .input-group-append,
        .search-forms .input-group-append {
            background: #ffbf00;
        }

        .post .post-footer .readmore,
        .sidebar .widget.widget_search .form-control:focus {
            border-color: #ffbf00;
        }

        .owl-carousel.owl-loaded .owl-nav .owl-next.disabled,
        .owl-carousel.owl-loaded .owl-nav .owl-prev.disabled,
        .xs-about-image-wrapper.owl-carousel.owl-theme .owl-nav [class*=owl-]:hover {
            background: #ffbf00 !important;

        }


        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover,
        .woocommerce ul.products li.product .button:hover {
            background-color: #FF4C30;
        }

        .search .page .entry-header .entry-title a:hover,
        .post .entry-header .entry-title a:hover,
        .meta-categories a:hover {
            color: #ffbf00;
        }

        h1,
        .xs-jumbotron-title {
            font-family: "Poppins";
            color: #1a1a1a;
            font-size: 36px;
            font-weight: 700;
        }

        h2,
        .entry-header .entry-title a,
        .post .entry-header .entry-title a {
            font-family: "Poppins";
            color: #1a1a1a;
            font-size: 30px;
            font-weight: 700;
        }

        h3 {
            font-family: "Poppins";
            color: #1a1a1a;
            font-size: 24px;
            font-weight: 700;
        }

        h4 {
            font-family: "Poppins";
            color: #1a1a1a;
            font-size: 18px;
            font-weight: 700;
        }

        h5 {
            font-family: "Poppins";
            color: #1a1a1a;
            font-size: 16px;
            font-weight: 700;
        }

        h6 {
            font-family: "Poppins";
            color: #1a1a1a;
            font-size: 14px;
            font-weight: 700;
        }

        .ts-footer {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        body {
            background-color: #FFFFFF;
        }

        .xs-footer {
            /*background-color: ;*/
            background-repeat: no-repeat;
            background-size: cover;
            background: #042ff8
        }

        .xs-footer-classic .widget-title,
        .footer-widget .widget-title,
        .xs-footer-classic h3,
        .xs-footer-classic h4,
        .xs-footer-classic .contact h3 {
            color: #142355;
        }

        .xs-footer-classic .widget-title,
        .footer-widget .widget-title,
        .xs-footer-classic h3,
        .xs-footer-classic h4,
        .xs-footer-classic .contact h3 {
            color: #142355;
        }

        .xs-footer-classic p,
        .xs-footer-classic .list-arrow li a,
        .xs-footer-classic .menu li a,
        .xs-footer-classic .service-time li,
        .xs-footer-classic .list-arrow li::before,
        .xs-footer-classic .menu li::before {
            color: #666;
        }

        .xs-footer a {
            color: #666;
        }

        .copy-right {
            background: #eff1f4;
        }

        .copy-right .copyright-text {
            color: #333333;
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/css/main/widget-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/font-face.css')}}">

    <!-- added code -->

    <script src="{{ asset('assets/js/vendors/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="{{asset('assets/js/custom/common.js?v=').time()}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/vendors/fontawesome-free-6.0.0-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/custom.css?v=').time()}}">

</head>

<body class="home page-template page-template-elementor_header_footer page page-id-7 theme-carrental woocommerce-no-js sidebar-active elementor-default elementor-template-full-width elementor-kit-15 elementor-page elementor-page-7">
    <div data-elementor-type="wp-post" data-elementor-id="23" class="elementor elementor-23" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <div class="toolbar-area">
                </div>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-ec71628 ekit-sticky--top xs_custom_header elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ec71628" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;ekit_sticky&quot;:&quot;top&quot;,&quot;ekit_sticky_offset&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;ekit_sticky_on&quot;:&quot;desktop_tablet_mobile&quot;,&quot;ekit_sticky_effect_offset&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]}}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f2e5ded" data-id="f2e5ded" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-1e5875b elementor-widget elementor-widget-image" data-id="1e5875b" data-element_type="widget" data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="heading_title">
                                                            <a href="{{url('/')}}">
                                                                <h1>Bikes To Book
                                                                    <span>Your Partner of Adventure</span>
                                                            </a>
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fbc0609" data-id="fbc0609" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-cdd9880 xs_custom_header elementor-widget elementor-widget-ekit-nav-menu" data-id="cdd9880" data-element_type="widget" data-widget_type="ekit-nav-menu.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con ekit_menu_responsive_tablet" data-hamburger-icon="icon icon-menu-6" data-hamburger-icon-type="icon" data-responsive-breakpoint="1024"> <button class="elementskit-menu-hamburger elementskit-menu-toggler">
                                                        <i aria-hidden="true" class="fa-solid fa-bars"></i> </button>
                                                    <div id="ekit-megamenu-main-menu" class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_fill_arrow ekit-nav-menu-one-page-no">
                                                        <ul id="main-menu" class="elementskit-navbar-nav elementskit-menu-po-right submenu-click-on-icon">
                                                            <li id="menu-item-744" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-756 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="/" class="ekit-menu-nav-link">Home</a></li>
                                                            <li id="menu-item-756" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-756 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="/rent_motorbike" class="ekit-menu-nav-link">MotoBikes</a></li>
                                                            <li id="menu-item-755" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-755 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="/rent_scooter" class="ekit-menu-nav-link">Scooters</a></li>
                                                            <li id="menu-item-759" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-752 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="/tour" class="ekit-menu-nav-link">Tours</a></li>
                                                            <li id="menu-item-753" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-753 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="/services" class="ekit-menu-nav-link">Services</a></li>
                                                            <li id="menu-item-752" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-752 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="/contact" class="ekit-menu-nav-link">Contact</a></li>
                                                        </ul>
                                                        <div class="elementskit-nav-identity-panel">
                                                            <div class="elementskit-site-title">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="heading_title">
                                                                            <a href="{{url('/')}}">
                                                                                <h1>Bikes To Book
                                                                                    <span>Your Partner of Adventure</span>
                                                                            </a>
                                                                            </h1>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="elementskit-menu-close elementskit-menu-toggler" type="button">X</button>
                                                        </div>
                                                    </div>
                                                    <div class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/main/htm.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/bootstrap.min.js')}}"></script>
  
    <script src="{{ asset('assets/js/main/widget-scripts.js')}}"></script>

    <script src="{{ asset('assets/js/main/webpack.runtime.min.js')}}"></script>
    <script src="{{ asset('assets/js/main/frontend-modules.min.js')}}"></script>

    <script src="{{ asset('assets/js/main/waypoints.min.js')}}"></script>

    <script src="{{ asset('assets/js/main/swiper.min.js')}}"></script>

    <script type='text/javascript' id='elementor-frontend-js-before'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile",
                        "value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Extra",
                        "value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet",
                        "value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Extra",
                        "value": 1365,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1620,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.2.5",
            "is_static": false,
            "experimentalFeatures": [],
            "urls": {

            },
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
        };
    </script>
    <script src="{{asset('assets/js/main/frontend.min.js')}}"></script>
    <script src="{{asset('assets/js/main/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/main/elementor.js?ver=2.3.1.1')}}"></script>
    <script src="{{asset('assets/js/main/jquery.sticky.js')}}"></script>
    <script src="{{asset('assets/js/main/sticky-content.js')}}"></script>
    <script src="{{asset('assets/js/main/elementor_3_0_2.js')}}"></script>
    <script src="{{asset('assets/js/main/preloaded-modules.min.js?ver=3.2.5')}}"></script>

    @yield('content')
    <div data-elementor-type="wp-post" data-elementor-id="24" class="elementor elementor-24 elementor elementor-7" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-c57cc83 elementor-section-full_width elementor-section-content-middle elementor-section-stretched elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="c57cc83" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a34bd1e" data-id="a34bd1e" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-c5f2f94 elementor-widget elementor-widget-elementskit-heading" data-id="c5f2f94" data-element_type="widget" data-widget_type="elementskit-heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-text_center   ekit_heading_mobile-text_center">
                                                        <h2 class="ekit-heading--title elementskit-section-title ">
                                                            SIGN UP FOR AMAZING OFFERS
                                                        </h2>
                                                        <h3 class="ekit-heading--subtitle elementskit-section-subtitle  ">EXCLUSIVE ACCESS FOR OFFERS AND PROMOTIONS</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-652a6c0" data-id="652a6c0" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-786ce1b xs_custom_mail_chimp elementor-widget-tablet__width-initial elementor-widget elementor-widget-elementskit-mail-chimp" data-id="786ce1b" data-element_type="widget" data-widget_type="elementskit-mail-chimp.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="ekit-mail-chimp">
                                                        <form id="newsletter" action="{{route('newsletter.post')}}#newsletter" method="post">
                                                            @csrf
                                                            <div class="elementskit_form_wraper elementskit_inline_form">
                                                                <div class="ekit-mail-chimp-email elementskit_input_wraper elementskit_input_container">
                                                                    <div class="elementskit_form_group">
                                                                        <div class="elementskit_input_element_container ">

                                                                            <input type="email" name="email" class="input input--white form-control" placeholder="Enter your Email Address" required />
                                                                            @error('email')
                                                                            <div class="help-block with-errors">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>

                                                                        @if(session()->has('newsletter-message'))
                                                                        <div class="alert alert-success mt-1" id="newsletter-alert">
                                                                            {{ session()->get('newsletter-message') }}
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="ekit_submit_input_holder elementskit_input_wraper">
                                                                    <button type="submit" class="ekit-mail-submit">send</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-405aceb" data-id="405aceb" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-c2a683f elementor-widget elementor-widget-elementskit-social-media" data-id="c2a683f" data-element_type="widget" data-widget_type="elementskit-social-media.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <ul class="ekit_social_media">
                                                        <li class="elementor-repeater-item-8090a9c">
                                                            <a href="#" class="twitter">
                                                                <i aria-hidden="true" class="fa-brands fa-whatsapp"></i>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-repeater-item-f313031">
                                                            <a href="#" class="dribbble">
                                                                <i aria-hidden="true" class="fab fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-repeater-item-f8c1d94">
                                                            <a href="#" class="facebook">
                                                                <i aria-hidden="true" class="fa-brands fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-8bd4312 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="8bd4312" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c74303f" data-id="c74303f" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-49f1fac elementor-widget elementor-widget-elementskit-heading" data-id="49f1fac" data-element_type="widget" data-widget_type="elementskit-heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-">
                                                        <h2 class="ekit-heading--title elementskit-section-title ">
                                                            ©2022
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <a href="https://wa.me/+212644701220" class="floating" target="_blank">
                    <i class="fab fa-whatsapp fab-icon"></i>
                </a>
            </div>
        </div>
    </div>


</body>

</html>