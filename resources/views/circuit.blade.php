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
                                                <div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                    <h2 class="ekit-heading--title elementskit-section-title ">
                                                        Tours - Our Tours
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
                                            <div class="row xs-car-vehicles">
                                                @foreach($circuits as $circuit)
                                                <div class="col-lg-4 mb-4">
                                                    <div class="card">
                                                        <img width="400" height="250" src="/{{$circuit->circuit_image}}" alt="{{$circuit->titre}}" class="card-img-top" style="width:400px;height:250px;">
                                                        <div class="card-body">
                                                            <h5 class="card-title card-title-clamp">{{$circuit->titre}}</h5>
                                                            <p class="card-text flex-grow-1 card-text-clamp">{!!$circuit->description!!}</p>
                                                            @php $circuit_id= Crypt::encrypt($circuit->id_circ); @endphp
                                                            <a href="{{url('/circuit_detail',$circuit_id)}}" class="btn card_btn">Read More</a>
                                                            <!-- <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a> -->
                                                        </div>
                                                    </div>
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
            </section>
        </div>
    </div>
</div>

<!-- <script>
    $('a[circuit_id]').click(function() {

        var circuit = $(this).attr('circuit_id');
        let token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/circuit_detail',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': token
            },
            dataType: 'json',
            data: {
                circuitID: circuit
            },
            success: function(data) {
                alert(data['success']);
            }
        });
        return false;
    });
</script> -->

@endsection