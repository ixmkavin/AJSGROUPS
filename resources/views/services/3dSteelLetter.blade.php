@extends('frontend.layout.frontend-master')

@php
    $baseTitle = '3D Steel Letter Sign Board in AJS Groups|3D steel signboard';
    $baseDescription = 'Our 3D steel letter sign boards are bold and easy to see from far away, making a strong impression on customers ';
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
            <img src="{{ asset('frontend/assets/images/resource/3D Steel Letter Sign Board.jpg') }}" alt="3D Steel Letter Sign Board ">
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
