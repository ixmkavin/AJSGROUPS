@extends('frontend.layout.frontend-master')

@php
    $baseTitle = 'Fire Safety Sign Board Services | Important Safety Solutions';
    $baseDescription = ' Stay alert with high-quality fire safety signage from AJS Groups, a trusted company in India, designed to deliver clear messages during emergenc';
    $baseKeywords = ' Fire safety signs ';
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
                <img src="{{ asset('frontend/assets/images/resource/fire safety signage.jpg') }}" alt="Fire Safety Sign Board">
        </div>

</section>



<section class="service-text">
        <div class="auto-container">
    
            <div class="content-column col-xl-12 col-lg-12 col-md-12 col-sm-12 order-lg-2">
                <div class="sec-title">
                    <div class="text">
                        <h4 class="sub-title mt-5"></h4>
                      
                       
                    </div>
                </div>
            </div>
    
        </div>
    </section>

@endsection