@extends('frontend.layout.frontend-master')

@php
    $baseTitle = 'Outdoor Graphics Services | Wall & Vinyl Graphic Solutions';
    $baseDescription = ' Get inspired by amazing Outdoor Graphic Design from AJS Groups,a top Indian company. Enhance your brand with our durable graphics for lasting impact';
    $baseKeywords = ' Outdoor Graphics ';
@endphp

@section('title', $baseTitle)
@section('meta_description', $baseDescription)
@section('meta_keywords', $baseKeywords)

@section('og_title', $baseTitle)
@section('og_description', $baseDescription)

@section('twitter_title', $baseTitle)
@section('twitter_description', $baseDescription)

@section('body')

<section class="service-section">
        <div class="service-overlay">
                <img src="{{ asset('frontend/assets/images/resource/Outdoor Graphic.jpg') }}" alt="Outdoor Graphics">
        </div>

</section>


<section class="service-text">
        <div class="auto-container">

                <div class="content-column col-xl-12 col-lg-12 col-md-12 col-sm-12 order-lg-2 ">
                        <div class="sec-title">
                                <h1 class="sub-title mt-5">Flex Printing</h1>
                                <div class="text">
                                        <h3></h3>
                                        <p>  </p>
                                        <h3></h3>
                                        <p></p>

                                        <h3></h3>
                                        <h4></h4>
                                        <p></p>
                                        <h4></h4>
                                        <p></p>
                                        <h4> </h4>
                                        <p></p>

                                        <h3></h3>
                                        <h4></h4>
                                        <p></p>
                                        <h4></h4>
                                        <p></p>
                                        <h4></h4>
                                        <p> </p>
                                        <h4> </h4>
                                        <p></p>
                                        <h4></h4>
                                        <p></p>

                                        <h3> </h3>
                                        <h4> </h4>
                                        <p> </p>
                                        <h4> </h4>
                                        <p></p>
                                        <h4></h4>
                                        <p></p>
                                        <h4> </h4>
                                        <p></p>

                                        <h3></h3>
                                        <h4> </h4>
                                        <p></p>
                                        <h4></h4>
                                        <p></p>
                                        <h4> </h4>
                                        <p></p>
                                        <h4> </h4>
                                        <p></p>

                                        <h3></h3>
                                        <h4> </h4>
                                        <p></h4>
                                        <p></p>
                                        <h4> </h4>
                                        <p></p>
                                        <h4> </h4>
                                        <p></p>

                                        <h3></h3>
                                        <p></p>

                                        <h3></h3>
                                        <p></p>


                                </div>
                        </div>
                </div>
        </div>
</section>

@endsection