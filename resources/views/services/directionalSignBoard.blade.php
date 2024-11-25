@extends('frontend.layout.frontend-master')

@php
    $baseTitle = 'Directional Sign Boards in india | Wayfinding Signage Solutions';
    $baseDescription = ' AJS Groups knows that clear navigation is essential and offers a range of directional sign boards, including freestanding and overhead signs.';
    $baseKeywords = ' Directional sign board ';
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
            <img src="{{ asset('frontend/assets/images/resource/directional sign board.jpg') }}" alt="Directional Sign Boards">
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
