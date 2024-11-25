@extends('frontend.layout.frontend-master')

@php
    $baseTitle = 'Best Trimcap Letter Boards in India | Premium Aluminium Signage ';
    $baseDescription = ' Top Quality Trimcap Sign Boards from AJS Groups in India, with LED Signage and Unique Style LED to elevate your brand with reliable solution';
    $baseKeywords = '  ';
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
                <img src="{{ asset('frontend/assets/images/resource/sample.jpg') }}" alt="Trimcap Letter Boards">
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