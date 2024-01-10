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
                                                        Rent MotoBikes
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
                                    <div class="container">
                                        <div class="row">
                                            @foreach($motos as $moto)
                                            <div class="col-lg-3 col-md-6 col-12 mb-4">
                                                <div class="card">
                                                    <img class="card-img-top" src="{{$moto->moto_img}}" alt="{{$moto->marque}} {{$moto->modèle}}">
                                                    <div class="card-body">
                                                        <h5 class="card-title flex-grow-1">{{$moto->marque}} {{$moto->modèle}} {{$moto->cylindrée}}cc</h5>
                                                        <a href="#" class="btn card_btn" data-toggle="modal" data-array='{"id_moto":"{{$moto->id_moto}}","modèle":"{{$moto->modèle}}","marque":"{{$moto->marque}}"}' data-target="#reservationModal">Reserve</a>
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
            </section>
        </div>
    </div>
</div>

<div class="modal fade " id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content  modal_reservation">
            <div class="modal-header  page_title">
                <div class="row">
                    <div class="col-12">
                        <h5>Reserve your :</h5>
                    </div>
                    <div class="col-12">
                        <span id="moto_name"></span>
                    </div>
                </div>

                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="reservation-form-shadow">
                    <form id="reservation-form">
                        @csrf
                        <div class="alert alert-success" style="display:none ;"></div>
                        <div class="row">
                            <div class="form-group col-12 col-md-12">
                                <input type="text" name="id_moto" id="optionMoto" class="input input--white form-control" hidden>
                                <div class="help-block with-errors" id="moto_error"></div>
                            </div>

                            <div class="form-group col-12 col-md-12">
                                <select name="number" class="input input--white form-control">
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
                                <select name="pick_up_p" id="pick_up_p" class="input input--white form-control">
                                    <option value="">Pick-up Place</option>
                                    @foreach($villes as $ville)
                                    <option value="{{$ville->id_ville}}">{{$ville->nom_ville}}</option>
                                    @endforeach
                                </select>
                                <div class="help-block with-errors" id="pick-p-error"></div>
                            </div>

                            <div class="form-group col-12 col-md-12">
                                <select name="drop_off_p" id="drop-off-p" class="input input--white form-control" disabled>
                                    <option value="">Drop-off Place</option>
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

                            <div class="form-group col-6 col-sm-6 col-md-6 ">
                                <input type="text" class="input input--white form-control" placeholder="Pick-up Date" onfocus="(this.type='date')" onblur="(this.type='text')" autocomplete="on" name="date_debut">
                                <div class="help-block with-errors" id="pick-d-error"></div>
                            </div>

                            <div class="form-group col-6 col-md-6 col-sm-6">
                                <input type="text" class="input input--white form-control" placeholder="Drop-of Date" onfocus="(this.type='date')" onblur="(this.type='text')" autocomplete="on" name="date_fin">
                                <div class="help-block with-errors" id="drop-d-error"></div>
                            </div>
                        </div>
                        <div class="row">

                        </div>
                        <div class="row">
                            <div class="form-group col-6 col-md-6 col-sm-6">
                                <input type="text" class="input input--white form-control" autocomplete="on" name="c_full_name" placeholder="Full Name">
                                <div class="help-block with-errors" id="name-error"></div>
                            </div>
                            <div class="form-group col-6 col-md-6 col-sm-6 ">
                                <input type="text" class="input input--white form-control" autocomplete="on" name="c_phone" placeholder="Phone Number ">
                                <div class="help-block with-errors" id="phone-error"></div>
                            </div>

                            <div class="form-group col-12 col-md-12">
                                <input type="text" class="input input--white form-control" name="c_email" aria-describedby="emailHelp" placeholder="Email" require="required">
                                <div class="help-block with-errors" id="email-error"></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-12 order-1 order-md-2 d-flex justify-content-between">
                                    <button type="submit" id="reserveMoto" class="btn btn_reservation ">Reserve Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

</script>

@endsection