@extends('frontend.layout.frontend-master')

@php
    $baseTitle = 'AJS Groups|Premier Hoarding Unipole Services in India';
    $baseDescription = 'Hoarding unipoles from AJS Groups provide a powerful advertising solution that stands out capturing attention and leaving a lasting impression for your brand ';
    $baseKeywords = ' unipole Hording ';
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
            <img src="{{ asset('frontend/assets/images/resource/Hoarding Unipole.jpg') }}" alt="unipole Hording">
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
