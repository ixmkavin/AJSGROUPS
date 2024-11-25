@extends('frontend.layout.frontend-master')

@php
    $baseTitle = 'ACP Cladding work by AJS Groups |Aluminum composite panels';
    $baseDescription = 'AJS Groups offers premium ACP cladding with high-quality sheets and aluminum composite panels, making your building stylish and weather-resistan ';
    $baseKeywords = ' ACP Cladding  ';
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
            <img src="{{ asset('frontend/assets/images/resource/ACP CladdingWork.jpeg') }}" alt="ACP Cladding work">
        </div>

    </section>


    <section class="services-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="services-details__content">
                        <h1 class="service-text">Give Your Building a Fresh Look with Our ACP Cladding Work</h1>
                        <p>At our company, we believe in transforming spaces into stunning works of art. With our top-notch ACP cladding work, we ensure that your building looks visually appealing and stands strong against the elements.</p>
    
                        <h3>What Makes Our ACP Cladding Stand Out?</h3>
                        <p>Our ACP panels are engineered to withstand harsh weather, making them the ideal choice for both commercial and residential projects.</p>
    
                        <div class="accordion-box mb-5">
                            <!-- Accordion Block: Unique Features -->
                            <li class="accordion block">
                                <div class="acc-btn">Unique Features of ACP Cladding
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <ul>
                                                <li><b>Unmatched Durability:</b>
                                                    <p>Our ACP panels can withstand sun, rain, and wind, ensuring a lasting impression.</p>
                                                </li>
                                                <li><b>Modern Look:</b>
                                                    <p>Whether you want a sleek metallic look or a natural wood finish, our ACP cladding gives your building a contemporary edge.</p>
                                                </li>
                                                <li><b>Hassle-Free Maintenance:</b>
                                                    <p>The smooth surface repels dust and dirt, requiring minimal cleaning.</p>
                                                </li>
                                                <li><b>Eco-Friendly:</b>
                                                    <p>Made from recyclable materials, our panels contribute to a sustainable future.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
    
                            <!-- Accordion Block: Applications -->
                            <li class="accordion block">
                                <div class="acc-btn">Perfect for Any Space
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <ul>
                                                <li><b>Commercial Buildings:</b>
                                                    <p>Our ACP cladding solutions add sophistication to shopping malls and corporate offices.</p>
                                                </li>
                                                <li><b>Residential Spaces:</b>
                                                    <p>Transform your home with elegant ACP cladding options for exterior walls and interior partitions.</p>
                                                </li>
                                                <li><b>Educational Institutions:</b>
                                                    <p>Our fire-resistant panels create a safe and inspiring environment for students and staff.</p>
                                                </li>
                                                <li><b>Public Infrastructure:</b>
                                                    <p>We provide durable cladding solutions for airports, train stations, and other public buildings.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
    
                            <!-- Accordion Block: Our Process -->
                            <li class="accordion block">
                                <div class="acc-btn">Why We’re the Best Choice for Your ACP Cladding Project
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <ul>
                                                <li><b>Expert Guidance:</b>
                                                    <p>Our team is here to guide you every step of the way, from consultation to installation.</p>
                                                </li>
                                                <li><b>High-Quality Materials:</b>
                                                    <p>We use only the best materials for our ACP panels, ensuring long-lasting beauty and strength.</p>
                                                </li>
                                                <li><b>Fast, Reliable Service:</b>
                                                    <p>We ensure that your project is completed on time and to the highest standards.</p>
                                                </li>
                                                <li><b>Competitive Pricing:</b>
                                                    <p>Our pricing structure means you get high-quality ACP cladding without sacrificing your budget.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
    
                        <h3>Ready to Transform Your Space?</h3>
                        <p>Contact us today to learn more about our ACP cladding solutions and how we can help enhance your property’s appearance and value.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

@endsection
