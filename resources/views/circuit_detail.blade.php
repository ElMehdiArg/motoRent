@extends('master_page')

@section('content')

<div data-elementor-type="wp-page" data-elementor-id="7" class="elementor elementor-7" data-elementor-settings="[]" style="background-color:#F7F7F7 ;">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-b721aed elementor-section-boxed  xs-jumbotron xs-innner-page-banner banner-bg" style="background-image:url(https://www.bmw-motorrad.ma/content/dam/bmwmotorradnsc/common/multiimages/images/models/adventure/r1250gs-adventure-2020/productstage/nsc-master-r1250gs-adventure-P0N2E_2560x1440.jpg.asset.1650953842984.jpg);">
                <div class="xs-solid-overlay" style="background-color: rgba(255,255,255,.80)"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b32634" data-id="3b32634" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-7692b75 elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="7692b75" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="elementskit-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet-ekit_heading_mobile-">
                                                    <h2 class="ekit-heading--title elementskit-section-title ">
                                                        Tour - {{$circuit[0]->titre}}
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
            <section class="elementor-section elementor-top-section elementor-element elementor-element-4d4f34a elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="b721aed" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b32634" data-id="3b32634" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-7692b75 elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="7692b75" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="elementskit-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                    <h2 class="ekit-heading--title elementskit-section-title ">
                                                        Tour - Description
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7692b75 elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="7692b75" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="elementskit-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="container">
                                                <div class="row text-center text-lg-start">
                                                    <div style="color: #716d6e;font-family: lato, Sans-serif;font-size: 18px;font-weight: 400;line-height: 1.7em;">
                                                        {{$circuit[0]->description}}
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
            <section class="elementor-section elementor-top-section elementor-element elementor-element-1a511a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="1a511a5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b32634" data-id="3b32634" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-7692b75 elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="7692b75" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="elementskit-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                    <h2 class="ekit-heading--title elementskit-section-title ">
                                                        Tour - Details
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="elementor-element elementor-element-7692b75 elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="7692b75" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="elementskit-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="container">
                                                <div class="row text-center text-lg-start">
                                                    <div style="color: #716d6e;font-family: lato, Sans-serif;font-size: 18px;font-weight: 400;line-height: 1.7em;">
                                                        {!!$circuit[0]->détail!!}
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
            <section class="elementor-section elementor-top-section elementor-element elementor-element-1a511a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="1a511a5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b32634" data-id="3b32634" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-7692b75 elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="7692b75" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="elementskit-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet-ekit_heading_mobile-">
                                                    <h2 class="ekit-heading--title elementskit-section-title ">
                                                        Tour - Gallery
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7692b75 elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="7692b75" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="elementskit-heading.default">
                                        <div class="elementor-widget-container">
                                            <!-- Page Content -->
                                            <div class="container">
                                                <div class="row text-center text-lg-start">
                                                    @foreach($circuit as $circ)
                                                    <div class="col-lg-2 col-md-3 col-6">
                                                        <a href="#" class="d-block mb-4 h-100">
                                                            <img width="200"  class="img-fluid img-thumbnail" src="/{{$circ->image}}" alt="{{$circ->titre}}" style="width:200px;height:120px;" >
                                                        </a>
                                                    </div>
                                                    @endforeach
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