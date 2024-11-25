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

<section class="page-title"
    style="background-image: url('{{ asset('frontend/assets/images/breadcrumb/Blog1.jpg') }}');">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Blog</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('/') }}">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <!-- Category Filter Buttons -->
        <div class="category-filter text-center mb-5">
        <button class="theme-btn btn-style-one active mb-3" data-filter="all">All</button>
<button class="theme-btn btn-style-one mb-3" data-filter="printing">Printing</button>
<button class="theme-btn btn-style-one mb-3" data-filter="signage">Signage</button>
<button class="theme-btn btn-style-one" data-filter="board">Board</button>

        </div>

        <div class="row blog-categories">
            <!-- Blog Post 1 (Printing) -->
            <x-service-block data-category="printing"
                image="frontend/assets/images/blog/TECHNOLOGICAL ADVANCEMENTS IN DESIGN-01.webp"
                icon="flaticon-business-010-startup" title="Technological Advancements in Design"
                dataCategory="printing" />

            <!-- Blog Post 2 (Printing) -->
            <x-service-block data-category="printing"
                image="frontend/assets/images/blog/HIGHLIGHTING AJS SOLUTIONS-01.webp"
                icon="flaticon-business-002-graph" title="Highlighting AJS Solutions"
                blog-url="{{ route('blog1') }}"
                dataCategory="printing" />

            <!-- Blog Post 3 (Signage) -->
            <x-service-block data-category="signage"
                image="frontend/assets/images/blog/THE RISE OF FLEX DEVELOPMENTS-01.webp"
                icon="flaticon-business-048-coin" title="The Rise of Flex Developments" 
                blog-url="{{ route('blog1') }}" dataCategory="signage" />

            <!-- Blog Post 4 (Board) -->
            <x-service-block data-category="board" image="frontend/assets/images/blog/FUTURE OUTLOOK-01.webp"
                icon="flaticon-business-002-graph" title="Future Outlook" 
                blog-url="{{ route('blog1') }}" dataCategory="board" />

            <!-- Additional Blog Posts -->
            <x-service-block data-category="board" image="frontend/assets/images/blog/FUTURE OUTLOOK-01.webp"
                icon="flaticon-business-002-graph" title="Future Outlook" 
                blog-url="{{ route('blog1') }}" dataCategory="board" />

            <x-service-block data-category="board" image="frontend/assets/images/blog/FUTURE OUTLOOK-01.webp"
                icon="flaticon-business-002-graph" title="Future Outlook" 
                blog-url="{{ route('blog1') }}" dataCategory="board" />

          
        </div>
    
    </div>
</section>

@endsection
