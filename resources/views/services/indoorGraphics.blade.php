@extends('frontend.layout.frontend-master')

@php
    $baseTitle = 'Indoor Graphics Services | Wall, Office & Interior Design Printing';
    $baseDescription = 'Transform your office space with custom Indoor Graphics from AJS Groups, India’s trusted company. Make your interiors unique with durable designs ';
    $baseKeywords = ' Indoor graphics ';
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
                <img src="{{ asset('frontend/assets/images/resource/indoor graphics.jpg') }}" alt="Indoor graphics">
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