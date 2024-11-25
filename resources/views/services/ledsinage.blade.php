@extends('frontend.layout.frontend-master')

@php
    $baseTitle = 'Elevate Your Advertising with Our LED Signboard Solutions in India';
    $baseDescription = 'LED signs help attract customers and share your message cost-effectively. AJS Groups is a leader in providing top-quality products and service ';
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
                <img src="{{ asset('frontend/assets/images/resource/led signage.jpg') }}" alt="LED Signboard">
        </div>

</section>


<section class="services-details">
    <div class="container">
        <div class="row">

            <div class="col-xl-12 col-lg-12">
                <div class="services-details__content">

                    <h1 class="service-text">Transform Your Advertising with LED Signage</h1>

                    <p>LED signage is a great way to catch people’s attention and share your message. It’s bright, clear, and stands out both indoors and outdoors. Plus, LED signs are energy-efficient, helping you save on electricity costs while still being highly visible. Whether you're advertising outside or inside a store, LED signs are perfect for showcasing your brand.</p>

                    <h3>Why Choose LED Signage?</h3>
                    <p>No matter where your business is in India, LED signage is an effective tool to boost your advertising. Whether you're in a busy city or a small town, our LED signage solutions are designed to fit any environment, helping your message reach your target audience.</p>

                    <div class="accordion-box mb-5">

                        <!-- Accordion Block 1: Why Choose LED Signage -->
                        <li class="accordion block">
                            <div class="acc-btn">Why Choose LED Signage?
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <ul>
                                            <li><b>Energy-Efficient:</b>
                                                <p>LED signs help save electricity costs while maintaining visibility both indoors and outdoors.</p>
                                            </li>
                                            <li><b>Highly Visible:</b>
                                                <p>Bright, vibrant, and designed to attract attention, LED signage is perfect for promoting your brand.</p>
                                            </li>
                                            <li><b>Long-Lasting:</b>
                                                <p>Durable and built to last, LED signs offer great value by remaining effective over time.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Accordion Block 2: Types of LED Signage We Offer -->
                        <li class="accordion block">
                            <div class="acc-btn">Types of LED Signage We Offer Across India
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <ul>
                                            <li><b>Indoor LED Displays:</b>
                                                <p>Ideal for stores, malls, or events, promoting products in busy environments.</p>
                                            </li>
                                            <li><b>Outdoor LED Boards:</b>
                                                <p>Weather-resistant boards perfect for outdoor advertising, visible day and night.</p>
                                            </li>
                                            <li><b>Programmable LED Displays:</b>
                                                <p>Easily update your message with these signs, ideal for businesses needing regular changes.</p>
                                            </li>
                                            <li><b>Message Boards:</b>
                                                <p>Real-time text changes make these useful for schools, offices, or businesses needing frequent updates.</p>
                                            </li>
                                            <li><b>Digital Billboards:</b>
                                                <p>Perfect for high-traffic areas, digital billboards offer rotating advertisements to reach a broad audience.</p>
                                            </li>
                                            <li><b>LED Window Signs:</b>
                                                <p>Eye-catching displays ideal for attracting customers to retail stores.</p>
                                            </li>
                                            <li><b>LED Neon Signs:</b>
                                                <p>Modern, energy-efficient, customizable signs that mimic traditional neon lighting.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Accordion Block 3: Benefits of LED Signage -->
                        <li class="accordion block">
                            <div class="acc-btn">Benefits of LED Signage
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <ul>
                                            <li><b>Durable and Low Maintenance:</b>
                                                <p>LED signs are long-lasting and require minimal upkeep, saving time and money.</p>
                                            </li>
                                            <li><b>Cost-Effective:</b>
                                                <p>LED signage uses less electricity, making it a smart choice for advertising while keeping energy costs low.</p>
                                            </li>
                                            <li><b>Weather-Resistant:</b>
                                                <p>Perfect for outdoor use, as they can withstand various weather conditions without fading.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Accordion Block 4: Custom LED Signage -->
                        <li class="accordion block">
                            <div class="acc-btn">Custom LED Signage for Your Business
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <ul>
                                            <li><b>Personalized Designs:</b>
                                                <p>We work with you to create custom LED signs tailored to your brand’s needs.</p>
                                            </li>
                                            <li><b>Unique Shapes and Sizes:</b>
                                                <p>Whether large outdoor displays or small indoor signs, we design LED signage that fits perfectly.</p>
                                            </li>
                                            <li><b>Professional Results:</b>
                                                <p>Our LED signs are designed to enhance your brand’s visibility and make a lasting impression.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Accordion Block 5: Eco-Friendly LED Signage -->
                        <li class="accordion block">
                            <div class="acc-btn">Eco-Friendly LED Signage
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <ul>
                                            <li><b>Energy-Saving Technology:</b>
                                                <p>Our LED signs are designed to reduce energy usage while maintaining high performance.</p>
                                            </li>
                                            <li><b>Eco-Conscious Materials:</b>
                                                <p>All materials used in our signage are environmentally friendly, helping your business stay green.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Accordion Block 6: How to Get Started -->
                        <li class="accordion block">
                            <div class="acc-btn">How to Get Started
                                <div class="icon fa fa-plus"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <ul>
                                            <li><b>Contact Us:</b>
                                                <p>Reach out for a free estimate and discuss your LED signage needs.</p>
                                            </li>
                                            <li><b>Design Collaboration:</b>
                                                <p>Share your ideas or let our design team assist in creating the perfect sign for your business.</p>
                                            </li>
                                            <li><b>Fast Delivery:</b>
                                                <p>We ensure timely delivery anywhere in India, so you can start promoting your business without delay.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </div>

                    <h3>Start Your LED Signage Project Today</h3>
                    <p>Are you ready to transform your business with eye-catching LED signage? Message us for a free estimate, and let's begin bringing your project to life. Whether you need a sign for a store, office, or event, we’re here to help you create the perfect LED signage to boost your business and attract more customers.</p>

                </div>
            </div>

        </div>
    </div>
</section>



@endsection