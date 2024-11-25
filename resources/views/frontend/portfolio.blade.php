@extends('frontend.layout.frontend-master')

@php
    $baseTitle = '';
    $baseDescription = ' ';
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

<section class="page-title" style="background-image: url('{{ asset('frontend/assets/images/breadcrumb/Protfolio.jpg') }}');">
    <div class="auto-container">
    <div class="title-outer">
    <h1 class="title">Portfolio</h1>
    <ul class="page-breadcrumb">
    <li><a href="{{ route('/') }}">Home</a></li>
    <li>Portfolio</li>
    </ul>
    </div>
    </div>
    </section>

        <div class="container portfolio mt-5">
             <div class="row" data-masonry='{"percentPosition": true }'>
                
                    <x-Portfolio image="frontend/assets/images/blog/TECHNOLOGICAL ADVANCEMENTS IN DESIGN-01.webp" />

                    <x-Portfolio image="frontend/assets/images/background/privacy.jpg" />

                    <x-Portfolio image="frontend/assets/images/breadcrumb/Contact.jpg" />

                    <x-Portfolio image="frontend/assets/images/blog/TECHNOLOGICAL ADVANCEMENTS IN DESIGN-01.webp" />

                </div>
        </div>


@endsection

