@extends('master_page')

@section('content')

<div data-elementor-type="wp-page" data-elementor-id="7" class="elementor elementor-7" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-3cf3f60 xs_custom_banner_one elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3cf3f60" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a9ef0f9" data-id="a9ef0f9" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-498ec7b elementor-invisible elementor-widget elementor-widget-carrental-reservation" data-id="498ec7b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;}" data-widget_type="carrental-reservation.default">
                                        <div class="elementor-widget-container">
                                            <div class="reservation-form-shadow ">
                                                <form id="reservation-form" class="home-form">
                                                    @csrf
                                                    <div class="alert alert-success" style="display:none ;"></div>
                                                    <div class="row">
                                                        <div class="form-group col-6 col-md-6">
                                                            <select name="id_moto" id="" class="input form-control">
                                                                <option value="">Select Moto </option>
                                                                @foreach($motos as $moto)
                                                                <option value="{{$moto->id_moto}}">{{$moto->marque}} {{$moto->modèle}}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="help-block with-errors" id="moto-error"></div>
                                                        </div>

                                                        <div class="form-group col-6 col-md-6">
                                                            <select name="number" class="input form-control">
                                                                <option value="">Select Number</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>

                                                            </select>
                                                            <div class="help-block with-errors" id="number-error"></div>
                                                        </div>
                                                        
                                                        <div class="form-group col-12 col-md-12">
                                                            <select name="pick_up_p" id="pick_up_p" class="input form-control">
                                                                <option value="">Pick-up Place</option>
                                                                @foreach($villes as $ville)
                                                                <option value="{{$ville->id_ville}}">{{$ville->nom_ville}}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="help-block with-errors" id="pick-p-error"></div>
                                                        </div>

                                                        <div class="form-group col-12 col-md-12">
                                                            <select name="drop_off_p" id="drop-off-p" class="input form-control">
                                                                <option value="">Drop-of Place</option>
                                                                @foreach($villes as $ville)
                                                                <option value="{{$ville->id_ville}}">{{$ville->nom_ville}}</option>
                                                                @endforeach

                                                            </select>
                                                            <div class="help-block with-errors" id="drop-p-error"></div>
                                                        </div>

                                                        <div class="form-group col-12 col-md-12">
                                                            <label class="toggler-wrapper style-1">
                                                                <input type="checkbox" id="checked" checked>
                                                                <div class="toggler-slider">
                                                                    <div class="toggler-knob"></div>
                                                                </div>
                                                            </label>
                                                            <div class="toggler-title">
                                                                <span>Return to the same place </span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-6 col-md-6 ">
                                                            <input type="text" class="input form-control" placeholder="Pick-up Date" onfocus="(this.type='date')" onblur="(this.type='text')" autocomplete="on" name="date_debut">
                                                            <div class="help-block with-errors" id="pick-d-error"></div>
                                                        </div>

                                                        <div class="form-group col-6 col-sm-6">
                                                            <input type="text" class="input form-control" placeholder="Drop-of Date" onfocus="(this.type='date')" onblur="(this.type='text')" autocomplete="on" name="date_fin">
                                                            <div class="help-block with-errors" id="drop-d-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-6 col-md-6">
                                                            <input type="text" class="input form-control" autocomplete="on" name="c_full_name" placeholder="Full Name">
                                                            <div class="help-block with-errors" id="name-error"></div>
                                                        </div>
                                                        <div class="form-group col-6 col-md-6 ">
                                                            <input type="text" class="input form-control" autocomplete="on" name="c_phone" placeholder="Phone Number ">
                                                            <div class="help-block with-errors" id="phone-error"></div>
                                                        </div>

                                                        <div class="form-group col-12 col-md-12">
                                                            <input type="text" class="input form-control" name="c_email" aria-describedby="emailHelp" placeholder="Email">
                                                            <div class="help-block with-errors" id="email-error"></div>
                                                        </div>

                                                        <div class="form-group col-12 col-md-12">
                                                            <button type="submit" class="btn btn_reservation">Reserve Now</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3dcc55b" data-id="3dcc55b" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-2884f0b elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-menu-anchor" data-id="2884f0b" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="menu-anchor.default">
                                        <div class="elementor-widget-container">
                                            <div id="home" class="elementor-menu-anchor"></div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-cccc2fb elementor-invisible elementor-widget elementor-widget-carrental-banner" data-id="cccc2fb" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="carrental-banner.default">
                                        <div class="elementor-widget-container">
                                            <div class="swiper-container car-banner-slider-wraper">
                                                <div class="swiper-wrapper" style="height:550px;">
                                                    <div class="swiper-slide">
                                                        <div class="banner-slider-content">
                                                            <h2 class="slider-title">GET 15% OFF YOUR RENTAL</h2>
                                                            <h3 class="slider-subtitle"> Plan your trip now </h3>
                                                            <div class="car-img">
                                                                <img width="590" height="323" src="{{asset('assets/img/pngwing.com.png')}}" class="attachment-full size-full" alt="GET 15% OFF YOUR RENTAL" loading="lazy" srcset="{{asset('assets/img/pngwing.com.png')}} 590w " sizes="(max-width: 590px) 100vw, 590px" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="banner-slider-content">
                                                            <h2 class="slider-title"> Luxury Motos and Scooters</h2>
                                                            <h3 class="slider-subtitle">Treat yourself </h3>
                                                            <div class="car-img">
                                                                <img width="490" height="323" src="{{asset('assets/img/4440_yamaha_tmax.png')}}" class="attachment-full size-full" alt=" Luxury car from from $28 day" loading="lazy" srcset="{{asset('assets/img/4440_yamaha_tmax.png')}} 590w" sizes="(max-width: 590px) 100vw, 590px" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="banner-navigation-wraper">
                                                    <div class="banner-button-prev banner-slider-navigation" style="--stroke_color: ">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </div>
                                                    <div class="banner-button-next banner-slider-navigation" style="--stroke_color: ">
                                                        <i class="fa fa-chevron-right"></i>
                                                    </div>
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
            <section class="elementor-section elementor-top-section elementor-element elementor-element-0c9ba2b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0c9ba2b" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3f7a04a" data-id="3f7a04a" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-7ff0249 xs_custom_testmonial elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget-tablet__width-initial elementor-invisible elementor-widget elementor-widget-elementskit-testimonial" data-id="7ff0249" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="elementskit-testimonial.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="elementskit-testimonial-slider" data-config="{&quot;rtl&quot;:false,&quot;arrows&quot;:false,&quot;dots&quot;:true,&quot;pauseOnHover&quot;:true,&quot;prevArrow&quot;:&quot;&quot;,&quot;nextArrow&quot;:&quot;&quot;,&quot;autoplay&quot;:true,&quot;autoplaySpeed&quot;:5000,&quot;infinite&quot;:true,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;responsive&quot;:[]}">
                                                    <div class="elementskit-testimonial_card" style="background-image: url();">
                                                        <ul class="elementskit-stars">
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                        </ul>
                                                        <p class="elementskit-commentor-coment">
                                                            It is always a positive experience when renting from your 5th street location. The staff is very professional and efficient and always smiling. And I always feel welcome and appreciated. The management is always prompt to solve any issue at any moment. Their efficiency and professionalism makes it my number one choice.</p>
                                                        <span class="elementskit-profile-info">
                                                            <strong class="elementskit-author-name">– Michael Smith, Santa Barbara CA</strong>
                                                            <span class="elementskit-author-des"></span>
                                                        </span>
                                                        <div class="xs-overlay elementor-repeater-item-9d24b7b"></div>
                                                    </div>
                                                    <div class="elementskit-testimonial_card" style="background-image: url();">
                                                        <ul class="elementskit-stars">
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                        </ul>
                                                        <p class="elementskit-commentor-coment">
                                                            It is always a positive experience when renting from your 5th street location. The staff is very professional and efficient and always smiling. And I always feel welcome and appreciated. The management is always prompt to solve any issue at any moment. Their efficiency and professionalism makes it my number one choice.</p>
                                                        <span class="elementskit-profile-info">
                                                            <strong class="elementskit-author-name">– Jon Doe, Las Vegas NV</strong>
                                                            <span class="elementskit-author-des"></span>
                                                        </span>
                                                        <div class="xs-overlay elementor-repeater-item-8a2a877"></div>
                                                    </div>
                                                    <div class="elementskit-testimonial_card" style="background-image: url();">
                                                        <ul class="elementskit-stars">
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                            <li><a href="#"><i class="eicon-star active"></i></a></li>
                                                        </ul>
                                                        <p class="elementskit-commentor-coment">
                                                            It is always a positive experience when renting from your 5th street location. The staff is very professional and efficient and always smiling. And I always feel welcome and appreciated. The management is always prompt to solve any issue at any moment. Their efficiency and professionalism makes it my number one choice.</p>
                                                        <span class="elementskit-profile-info">
                                                            <strong class="elementskit-author-name">– Michael Smith, Santa Barbara CA</strong>
                                                            <span class="elementskit-author-des"></span>
                                                        </span>
                                                        <div class="xs-overlay elementor-repeater-item-1a5eb2c"></div>
                                                    </div>
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
            <section class="elementor-section elementor-top-section elementor-element elementor-element-947cd1a elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="947cd1a" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-748d3ca" data-id="748d3ca" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-f55d5d8 elementor-widget elementor-widget-elementskit-heading" data-id="f55d5d8" data-element_type="widget" data-widget_type="elementskit-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                    <h2 class="ekit-heading--title elementskit-section-title ">
                                                        Quality Guaranteed
                                                    </h2>
                                                    <h3 class="ekit-heading--subtitle elementskit-section-subtitle  ">Here is an example with one single photo displayed on the right.</h3>
                                                    <div class='ekit-heading__description'>
                                                        <p>Here is some dummy text. Hover over me! This is an demo tooltip! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vero voluptas delectus explicabo maxime ad qui incidunt! Saepe.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="elementor-element elementor-element-f612ccd elementor-widget elementor-widget-elementskit-dual-button" data-id="f612ccd" data-element_type="widget" data-widget_type="elementskit-dual-button.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="ekit-element-align-wrapper">
                                                    <div class="ekit_double_button"> <a class="ekit-double-btn ekit-double-btn-one" href="#">
                                                            <i aria-hidden="true" class="fas fa-paper-plane"></i> More Information </a>
                                                        <a class="ekit-double-btn ekit-double-btn-two" href="#">
                                                            <i aria-hidden="true" class="fas fa-heartbeat"></i> Buy This Theme </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3d7969b" data-id="3d7969b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-f0d974f elementor-widget elementor-widget-spacer" data-id="f0d974f" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-4ea8854 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="4ea8854" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f56baaf" data-id="f56baaf" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-c20f26c elementor-aspect-ratio-32 elementor-widget elementor-widget-video" data-id="c20f26c" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https://www.youtube.com/watch?v=LieUfFeL7f0&quot;,&quot;aspect_ratio&quot;:&quot;32&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                <div class="elementor-video"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-841009c" data-id="841009c" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-52e1563 elementor-widget elementor-widget-elementskit-heading" data-id="52e1563" data-element_type="widget" data-widget_type="elementskit-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                    <h2 class="ekit-heading--title elementskit-section-title ">
                                                        Watch our info tour
                                                    </h2>
                                                    <h3 class="ekit-heading--subtitle elementskit-section-subtitle  ">You can also show youtube videos in this section!</h3>
                                                    <div class='ekit-heading__description'>
                                                        <p>Here is some dummy text. Lorem ipsum dolor sit amet, This is an labeled text snippet!, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-f053ae5 elementor-widget elementor-widget-elementskit-heading" data-id="f053ae5" data-element_type="widget" data-widget_type="elementskit-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                    <div class='ekit-heading__description'>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vero voluptas delectus explicabo maxime ad qui incidunt! no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                    </div>
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
            <section class="elementor-section elementor-top-section elementor-element elementor-element-11586cb elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="11586cb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9516aed" data-id="9516aed" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-7089c84 elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="7089c84" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="elementskit-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="ekit-heading elementskit-section-title-wraper ekit_heading_tablet-ekit_heading_mobile-text_left">
                                                    <h2 class="ekit-heading--title elementskit-section-title ">
                                                        Code of ethics
                                                    </h2>
                                                    <div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider elementskit-style-long">
                                                        <div class="elementskit-border-divider elementskit-style-long"></div>
                                                    </div>
                                                    <div class='ekit-heading__description'>
                                                        <p>BikesToBook undertakes to respect a certain number of elementary rules :</p>
                                                        <ul style="margin-left: 40px;">
                                                            <li>Courteous and friendly welcome</li>
                                                            <li>Availability and attention</li>
                                                            <li>Devoir de confidentialité et de protection relative aux données recueillies</li>
                                                            <li>Duty of confidentiality and protection relating to the data collected</li>
                                                            <li>Duty to advise customers</li>
                                                            <li>Fair business practices vis-à-vis its customers and competitors</li>
                                                            <li>Commitment not to subordinate the interests of its customers to its own interests</li>
                                                            <li>Obligation of transparency in information</li>
                                                            <li>Need to guarantee its customers availability, except in cases of force majeure (immobilization following an accident or possible bad weather making driving impracticable)
                                                            </li>
                                                        </ul>
                                                    </div>
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
            <section class="elementor-section elementor-top-section elementor-element elementor-element-11586cb elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="11586cb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9516aed" data-id="9516aed" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-7089c84 elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="7089c84" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="elementskit-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="ekit-heading elementskit-section-title-wraper ekit_heading_tablet-ekit_heading_mobile-text_left">
                                                    <h2 class="ekit-heading--title elementskit-section-title ">
                                                        Our partners
                                                    </h2>
                                                    <div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider elementskit-style-long">
                                                        <div class="elementskit-border-divider elementskit-style-long"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-a523a22 elementor-widget elementor-widget-elementskit-client-logo" data-id="a523a22" data-element_type="widget" data-widget_type="elementskit-client-logo.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="elementskit-clients-slider simple_logo_image" data-config="{&quot;rtl&quot;:false,&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;pauseOnHover&quot;:true,&quot;prevArrow&quot;:&quot;&quot;,&quot;nextArrow&quot;:&quot;&quot;,&quot;autoplay&quot;:true,&quot;autoplaySpeed&quot;:8000,&quot;infinite&quot;:true,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;rows&quot;:1,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1024,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1},&quot;arrows&quot;:false}]}" data-direction="">
                                                    <div class="elementskit-client-slider-item ">
                                                        <div class="single-client image-switcher" title="Title #1">
                                                            <div class="content-image">
                                                                <img src="{{asset('assets/img/honda-logo.png')}}" alt="partner1" class="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementskit-client-slider-item ">
                                                        <div class="single-client image-switcher" title="Title #1">
                                                            <div class="content-image">
                                                                <img src="{{asset('assets/img/yamaha-logo.png')}}" alt="partner1" class="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementskit-client-slider-item ">
                                                        <div class="single-client image-switcher" title="Title #2">
                                                            <div class="content-image">
                                                                <img src="{{asset('assets/img/bmw-logo.png')}}" alt="partner2" class="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementskit-client-slider-item ">
                                                        <div class="single-client image-switcher" title="Title #2">
                                                            <div class="content-image">
                                                                <img src="{{asset('assets/img/ktm-logo.png')}}" alt="partner2" class="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementskit-client-slider-item ">
                                                        <div class="single-client image-switcher" title="Title #3">
                                                            <div class="content-image">
                                                                <img src="{{asset('assets/img/kymco-logo.png')}}" alt="partner3" class="">
                                                            </div>
                                                        </div>
                                                    </div>
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
        </div>
    </div>
</div>

@endsection