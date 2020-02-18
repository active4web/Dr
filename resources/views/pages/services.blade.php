@extends('layout.master')
@section('content')
<?php
foreach($sitesetting as $sitesetting)
foreach($site_info as $site_data)
?>

  <!--  Main start -->
  <main>

<!-- Service block top start -->
<div class="overflow_hidden">
    <div class="radius_niz_mini">
        <div class="row header_title title_service">
            <div class="container">
                <div class="header_title_content">
                    
                    <p>{!! $sitesetting->services_intro_en !!}</p>

                </div>
                <img src="{{url('/')}}/backend/uploads/site_setting/{{$sitesetting->services_img }}" class="absolute_img" data-srcset="{{url('/')}}/backend/uploads/site_setting/{{$sitesetting->services_img }},{{url('/')}}/backend/uploads/site_setting/{{$sitesetting->services_img }}2x" alt="DiDent">
            </div>
        </div>
    </div>
</div>
<!-- Service block top end -->

<!-- Service start -->
<div class="row services">
    <div class="overflow_hidden">
        <div class="radius_row_niz services_row">
            <div class="container">
                <div class="row row-15">
                    <!-- Service item start -->
                    @if(count($data)>0)
@foreach($data as $prod)
                    <div class="services_item">
                        <span class="services_item_title">{{$prod->title_eng}}</span>
                        <span class="services_item_desc">{{$prod->description_en}}</span>
                        <img class="dental_imgIcon" src="{{url('/')}}/backend/uploads/services/{{$prod->img}}" alt="">
                    </div>
                    <!-- Service item end -->
                    @endforeach
<div class="clearfix col-md-12"></div>
 <div class="col-md-12" style="text-align:center;min-height:40px">{{$data->onEachSide(2)->links()}}</div>
@else
<div class="col-md-12" style="text-align:center">There is no data</div>
@endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service end -->
<!-- Presentation Start -->
<div class="row gallery presentation_row">
    <div class="presentation_fon">
        <div class="block_color_blue radius_niz_mini"></div>
    </div>
    <div class="row presentation_gallery">
        <div class="container">
            <div class="row presentation_gallery_row">
                <h4>Patients</h4>
                <div class="navigation"></div>
            </div>
            <div class="presentation_carusel">
                <div class="presentation_title">Cosmetic Dentstry of New Generation</div>
                <div class="row presentation_carusel_vn">
                    <div class="owl_presentation owl-carousel owl-theme">
                        @foreach($works as $works_data)
                        <div class="after_before_row overflow_hidden">
                            <div class="radius_mini">
                                <div class="twentytwenty-container">
                                    <!-- The before image is first -->
                                    <img src="{{url('')}}/backend/uploads/works/{{$works_data->img}}" alt="DiDent" />
                                    <!-- The after image is last -->
                                    <img src="{{url('')}}/backend/uploads/works/{{$works_data->img1}}" alt="DiDent" />
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                       
                    </div>
                    <div class="carousel_counter"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Presentation End -->
</main>
<!--  Main end -->
</div>
<!-- Wrapper End -->
@endsection



